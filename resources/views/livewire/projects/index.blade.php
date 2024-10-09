<div>
    @foreach ($this->projects as $project)
        <li>
            <a heref="{{ route('projects.show', $project->id) }}">
                {{ $project->id }}. {{ $project->title }}
            </a>
        </li>  
    @endforeach
</div>
