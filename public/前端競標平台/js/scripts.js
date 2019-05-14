function edit_news() {
        var table = document.getElementById("news_table");
        var news = document.getElementById("news");
        var page = document.getElementById("pagination");
        var footer = document.getElementById("footer");

        console.log(table);
        table.classList.add("display-none");
        page.classList.add("display-none");

         var text = document.createElement("textarea");
         text.name = "post";
         text.maxLength = "5000";
         text.classList.add("text-area");

         var submit = document.createElement("button");
         submit.textContent = "submit";
         submit.classList.add("btn" ,"btn-danger", "margin-right-5");

         var cancel = document.createElement("button");
         cancel.textContent = "cancel";
         cancel.classList.add("btn" ,"btn-danger");


         function submit_new(){
           table.classList.remove("display-none");
           page.classList.remove("display-none");
           text.classList.add("display-none");
           submit.classList.add("display-none");
           cancel.classList.add("display-none");

         }

         function recover(){
           table.classList.remove("display-none");
           page.classList.remove("display-none");
           text.classList.add("display-none");
           submit.classList.add("display-none");
           cancel.classList.add("display-none");

         }


         submit.addEventListener('click', submit_new);
         cancel.addEventListener('click', recover);


         news.appendChild(text);
         news.appendChild(submit);
         news.appendChild(cancel);


        footer.classList.remove("margin-top-150");
        footer.classList.add("margin-top-350");
}


/*function edit_products() {
        var table = document.getElementById("products_table");
        var products = document.getElementById("products");
        var page = document.getElementById("pagination");
        var footer = document.getElementById("footer");

        console.log(table);
        table.classList.add("display-none");
        page.classList.add("display-none");

         var text = document.createElement("textarea");
         text.name = "post";
         text.maxLength = "5000";
         text.classList.add("text-area");

         var submit = document.createElement("button");
         submit.textContent = "submit";
         submit.classList.add("btn" ,"btn-danger", "margin-right-5");

         var cancel = document.createElement("button");
         cancel.textContent = "cancel";
         cancel.classList.add("btn" ,"btn-danger");


         function submit_new(){
           table.classList.remove("display-none");
           page.classList.remove("display-none");
           text.classList.add("display-none");
           submit.classList.add("display-none");
           cancel.classList.add("display-none");

         }

         function recover(){
           table.classList.remove("display-none");
           page.classList.remove("display-none");
           text.classList.add("display-none");
           submit.classList.add("display-none");
           cancel.classList.add("display-none");

         }


         submit.addEventListener('click', submit_new);
         cancel.addEventListener('click', recover);


         products.appendChild(text);
         products.appendChild(submit);
         products.appendChild(cancel);


        footer.classList.remove("margin-top-150");
        footer.classList.add("margin-top-350");
}*/
