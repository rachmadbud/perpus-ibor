<a href="{{route('admin.book.edit', $model)}}"  class="btn btn-warning">Edit</a>
<button href="{{route('admin.book.destroy', $model)}}" class="btn btn-danger" id="delete">Hapus</button>
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#delete').on('click', function(event) {
        event.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({ 
  title: 'Anda Yakin Menghapus DAta?',
  text: "Data Tidak Dapat Dikembalikan!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus!'
}).then((result) => {
  if (result.value) {
   
   
        document.getElementById('deleteForm').action = href;
        document.getElementById('deleteForm').submit();
    Swal.fire(
      'Terhapus!',
      'Data Anda Berhasil Dihapus.',
      'success'
    )
  }
})
    })
</script>
