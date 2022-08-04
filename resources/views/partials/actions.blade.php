<button class="btn btn-sm btn-primary">
    <i class="fas fa-edit"></i>
</button>

<form action="{{ route('admin.users.destroy', $id) }}" method="POST" class="d-inline">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="fas fa-trash-alt"></i>
    </button>
</form>
