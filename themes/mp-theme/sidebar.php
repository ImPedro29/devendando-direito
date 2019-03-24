<div class="aside" id="aside">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

    <?php endif; ?>
    <script>
        let widget = document.querySelector(".widget");
        if(widget.querySelector(".title").innerHTML === "[ATIVA]" || widget.querySelector(".title").innerHTML === "[ATIVO]"){
            widget.removeChild(widget.querySelector(".title"));
            widget.classList.add("propaganda");
            let adsensecode = widget.querySelector("p").innerHTML;
            widget.innerHTML = adsensecode;
            widget.classList.remove("widget");
        }
    </script>
</div>
