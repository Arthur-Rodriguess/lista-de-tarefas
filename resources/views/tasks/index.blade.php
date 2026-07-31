<x-layout title='Tarefas'>
    <x-slot:headerActions>
        <a href="{{ route("tasks.create") }}" class="btn btn-secondary d-inline-flex gap-2">
            <i class="bi bi-clipboard-plus-fill"></i>
            Adicionar Tarefa
        </a>
    </x-slot:headerActions>

    @isset($successMessage)
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endisset

    <ul class="list-group">
        @forelse($tasks as $task)
            <li class="list-group-item d-flex align-items-center justify-content-between py-3">
                <div>
                    <p class="mb-0 fs-5 fw-medium">{{ $task->title }}</p>
                    @if($task->concluded == false)
                        <p class="text-secondary mb-0">Pendente</p>
                    @elseif($task->concluded == true)
                        <p class="text-success mb-0">Concluída</p>
                    @endif
                </div>
                    <div class="d-flex gap-2 bg-transparent border rounded py-1 px-2">
                        <form action="{{ route("tasks.destroy", $task) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent p-0 delete-btn" data-task-title="{{ $task->title }}">
                                <i class="bi bi-clipboard-x-fill fs-5 text-danger"></i>
                            </button>
                        </form>
                        <form action="{{ route("tasks.conclude", $task) }}" method="POST">
                            @csrf
                            <button type="submit" class="border-0 bg-transparent p-0">
                                <i class="bi bi-clipboard-check-fill fs-5 text-success"></i>
                            </button>
                        </form>
                    </div>
            </li>
        @empty
            <p class="text-secondary text-center mt-5">Ainda não há nenhuma tarefa</p>
        @endforelse
    </ul>
    <x-delete-modal></x-delete-modal>
</x-layout>