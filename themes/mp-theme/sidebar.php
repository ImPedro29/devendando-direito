<div class="aside" id="aside">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

    <?php endif; ?>
    <script>
        let widget = document.querySelector(".widget");
        widget.classList.add("propaganda");
        widget.removeChild(widget.querySelector(".title"));
    </script>
</div>
