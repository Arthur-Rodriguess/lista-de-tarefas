<x-layout title='Tarefas'>
    <x-slot:headerActions>
        <a href="/tasks/create" class="btn btn-primary d-inline-flex gap-2">
            <i class="bi bi-list-task"></i>
            Adicionar Tarefa
        </a>
    </x-slot:headerActions>
    <ul class="list-group">
        @forelse($tasks as $task)
            <li class="list-group-item d-flex align-items-center justify-content-between py-3">
                <p class="mb-0 fs-5 fw-medium">{{ $task->title }}</p>
                @if($task->concluded == false)
                    <p class="text-secondary mb-0">Pendente</p>
                @elseif($task->concluded == true)
                    <p class="text-success mb-0">Concluída</p>
                @endif
            </li>
        @empty
            <p class="text-secondary text-center mt-5">Ainda não há nenhuma tarefa</p>
        @endforelse
    </ul>
</x-layout>