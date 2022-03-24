<!-- Finaliza as tag's abertas no header -->
        </div>
    </body>
</html>


<script>
    // Controla sidebar
    document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)


            if(toggle && nav && bodypd && headerpd){
                toggle.addEventListener('click', ()=>{
                    nav.classList.toggle('show')
                    bodypd.classList.toggle('body-pd')
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle','nav-bar','body-pd','header');

        // Controla active dos links na sidebar
        const linkColor = document.querySelectorAll('.nav_link');

        function colorLink(){
            if(linkColor){
                linkColor.forEach(l=> l.classList.remove('active'));
                this.classList.add('active');
            }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))
    });
</script>
