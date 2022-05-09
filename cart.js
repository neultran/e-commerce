var cart = {
  //AJAX FETCH
  ajax : (data, after) => {
    // (A1) FORM DATA
    let form = new FormData();
    for (let [k, v] of Object.entries(data)) { form.append(k, v); }

    fetch("ajax-cart.php", { method:"POST", body:form })
    .then((res) => res.json()).then((res) => {
      if (res.status!=1) { alert(res.msg); }
      else if (after) { after(res.msg); }
    }).catch((err) => {
      alert("Error");
      console.error(err);
    });
  },

  //show items in cart
  show : () => {
    cart.ajax({ req : "get" }, (items) => {
      // (B1) GET HTML CART
      let hcart = document.getElementById("cart");
      hcart.innerHTML = "";

      //empty cart
      if (items===null) { hcart.innerHTML = "Cart is empty."; }

      // change amount of items
      else {
        let total = 0;
        for (let [id, pdt] of Object.entries(items)) {
          // ITEM ROW HTML ELEMENTS
          let row = document.createElement("div"),
              rowA = document.createElement("button"),
              rowB = document.createElement("div"),
              rowC = document.createElement("input");

          // delete item
          rowA.innerHTML = "X";
          rowA.onclick = () => { cart.del(id); };
          rowA.className = "cDel";
          row.appendChild(rowA);

          // name of item
          rowB.innerHTML = pdt.name;
          rowB.className = "cName";
          row.appendChild(rowB);

          // quantity
          rowC.type = "number";
          rowC.value = pdt.qty;
          rowC.min = 0; rowC.max = 99;
          rowC.onchange = function () { cart.set(id, this.value); };
          rowC.className = "cQty";
          row.appendChild(rowC);

          // total
          total += pdt.qty * pdt.price;
          row.className = "cRow";
          hcart.appendChild(row);
        }

        let row = document.createElement("div");
        row.innerHTML = "TOTAL $" + total.toFixed(2);
        row.className = "cTotal";
        hcart.appendChild(row);

        // empty whole cart
        row = document.createElement("button");
        row.innerHTML = "Empty";
        row.className = "cNuke";
        row.onclick = cart.nuke;
        hcart.appendChild(row);
      }
    });
  },

  //add item
  add : (pid) => {
    cart.ajax({ req : "add", pid : pid }, cart.show);
  },

  //change how many
  set : (pid, qty) => {
    cart.ajax({ req : "set", pid : pid, qty : qty }, cart.show);
  },

  //remove one item
  del : (pid) => {
    cart.ajax({ req : "del", pid : pid }, cart.show);
  },

  //remove whole cart
  nuke : () => { if (confirm("Are you sure you want to empty your cart?")) {
    cart.ajax({ req : "nuke" }, cart.show);
  }}
};
window.addEventListener("DOMContentLoaded", cart.show);
