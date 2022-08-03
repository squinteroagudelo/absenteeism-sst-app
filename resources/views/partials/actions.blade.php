<form action="{{ route('admin.users.destroy', $id) }}" method="POST">
    @csrf
    @method('delete')
    <button type="button" class="btn btn-primary btn-sm">
        <i class="fas fa-edit"></i>
    </button>
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="fas fa-trash-alt"></i>
    </button>
</form>
