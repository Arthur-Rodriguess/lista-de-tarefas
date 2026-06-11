<x-layout title="Adicionar Tarefa">
    <form action="{{ route("tasks.store") }}" method="post">
        <div class="mb-3">
            <label for="title" class="form-label fw-semibold fs-5">Título da tarefa</label>
            <input type="text" name="title" id="title" required class="form-control" autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>