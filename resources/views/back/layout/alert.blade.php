
@if (session()->has('success'))
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
      Toast.fire({
        icon: 'success',
        title: "{{ session()->get('success') }}"
      });

  });
</script>
@endif
@if(session()->has('error'))
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
    Toast.fire({
        icon: 'error',
        title:" {{ session()->get('success') }}"
      });
  });
</script>
@endif