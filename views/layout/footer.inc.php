<footer class='flex flex-col bg-amber-300 h-64'>
                <div class='flex justify-center border-b border-amber-200 gap-6 p-4'>
                    <a href='https://github.com/Lxdovic'><img class='w-8 h-8' src='assets/github.png'></a>
                    <a href='https://fr.linkedin.com/in/ludovic-debever-044033230'><img class='w-8 h-8' src='assets/linkedin.png'></a>
                </div>

                <p class='m-auto'>© Lxdovic 2022</p>
            </footer>
        </div>

        <script>
            new Vue({
                data() {
                    return {
                        menu_open: false
                    }
                },

                methods: {
                    setOpacity(elm, x) {
                        document.getElementById(elm).style.opacity = 1
                    }
                }
            }).$mount('#app')
        </script>
    </body>
</html>