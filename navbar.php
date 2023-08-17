

<!-- <div class="nav_bar_holder"> -->
<a href="/"> 
<img id="SFLogo" src="https://i.imgur.com/IgWzurk.png" class=" Seafoam Media logo">
</a>
<div class="logo_type_holder"><img src="/images/s_F_1.png" class="logo_type"/></div>
<div  class="menu_lines"  id="menuLines">
                    <div class="m_nav bar1"></div>
                    <div class="m_nav bar2"></div>
                    <div class="m_nav bar2" ></div>
                  
                </div>
                <script>
                    let status = true
                    $('#menuLines').click(function(){
                        
                        // $('.m_nav').toggleClass('m_nav_open');
                        // let status = true
                       if(status){
                        console.log("clicked")
                        status = false
                        $('.side_nav').css("display", "flex");
                        $('.m_nav').css("background", "white");
                        $('.menu_lines').css("position", "fixed");
                        
                    } else {
                        status = true
                        $('.side_nav').css("display", "none");
                        $('.m_nav').css("background", "black");
                        $('.menu_lines').css("position", "absolute");
                    }
                    })
                </script>

<!-- </div> -->

