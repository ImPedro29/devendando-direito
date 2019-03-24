<div class="aside" id="aside">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

    <?php endif; ?>
    <script>
        let widget = document.querySelector(".widget");
        if(widget.querySelector(".title").innerHTML === "[ATIVA]" || widget.querySelector(".title").innerHTML === "[ATIVO]"){
            let adsensecode = widget.querySelector("p").innerHTML;
            document.getElementById("aside").removeChild(widget);
            let div = document.createElement("div");
            div.innerHTML = adsensecode;
            div.classList.add("fixedAdsense");
            document.body.appendChild(div);
        }
    </script>
</div>
