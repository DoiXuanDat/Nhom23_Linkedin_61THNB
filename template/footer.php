<script>
        const modalBtn = document.querySelector('.js-modal-open')
        const modal =document.querySelector('.modal')
        const modalClose=document.querySelector('.js-modal-close')
        //thêm open vào class modal
        function showmodal(){
            modal.classList.add('open')
        }
        // gỡ bỏ open ở class modal
        function hidemodal(){
            modal.classList.remove('open')
        }
        modalBtn.addEventListener('click',showmodal)
        modalClose.addEventListener('click',hidemodal)
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>