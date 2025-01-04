<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Sidebar Toggle Script -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const wrapper = document.getElementById('wrapper');
    menuToggle.addEventListener('click', () => {
        wrapper.classList.toggle('toggled');
    });
</script>

<style>
    #wrapper.toggled #sidebar-wrapper {
        margin-left: -250px;
    }

    #sidebar-wrapper {
        transition: margin 0.25s ease-out;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>
</body>

</html>