<div class="aside" id="aside">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

    <?php endif; ?>
    <script>
        let widget = document.querySelector(".widget");
        if(widget.querySelector(".title").innerHTML === "[ATIVA]" || widget.querySelector(".title").innerHTML === "[ATIVO]"){
            let adsensecode = widget.querySelector("p").innerHTML;
            document.getElementById("aside").removeChild(widget);
            document.body.innerHTML += adsensecode;
        }
    </script>
</div>
