<div class="py-3 bg-info px-6 text-center">
    <p class="">Copyright&copy; <?= date('Y') ?></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.datatables.net/2.0.6/js/dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        new DataTable('#dataTables');
    });
</script>
</body>

</html>