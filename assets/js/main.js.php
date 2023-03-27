<script type="text/javascript">
    $(document).ready(() => {
        $('.hamburger').on("click", () => {
            $(".hamburger").toggleClass("active")
            $(".menuitems").toggleClass("active")
        });
        $('[class=menuItems]').on('click', () => {
            $(".hamburger").toggleClass("active");
            $(".menuitems").toggleClass("active")
        });

        // delete from the database

    });
</script>