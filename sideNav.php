

<div class="side_nav" id="sideNav"> 


<a href="/">Home</a>
<a href="design.php">Design</a>
<a href="development.php">Development</a>
<a href="brand-management.php">Brand Management</a>
<a href="marketing.php">Marketing</a>
<a href="advertising.php">Advertising</a>
<a href="about.php">Who We Are</a>
<a href="pricing.php">Pricing</a>




</div>


<script>
    $('#sideNav').click(() => {
        console.log("clicked")
        $("#sideNav").css("display", "none")
        $('.m_nav').css("background", "black")
        $('.menu_lines').css("position", "absolute");
        status = true

    })
</script>