<form action="{{ route('admin.category.delete', $category->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this category?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="bi bi-trash"></i>
    </button>
</form>
