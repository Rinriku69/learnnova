<div x-data="{ isOpen: true }" @click.outside="isOpen = false" style="width: 300px; position: relative;" >

    <input 
        type="text" 
        name="term"
        placeholder="Search courses..."
        wire:model.live="searchTerm"
        
        style="width: 100%;"
        @focus="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown="isOpen = true"
    >

    <div 
        class="search-results-container" 
        x-show="isOpen && $wire.searchTerm.length > 1" 
        x-transition
        style="position: absolute; background: white; border: 1px solid #ddd; width: 100%; z-index: 10; margin-top: 5px; border-radius: 4px;"
    >
        @if($courses->isNotEmpty())
            <ul style="list-style-type: none; margin: 0; padding: 10px;">
                @foreach($courses as $course)
                @can('list', $course)
                    <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;">
                        <a href="{{ route('courses.view', ['courseCode' => $course->code]) }}">
                            {{ $course->name }}
                        </a>
                    </li>
                @endcan
                @endforeach
            </ul>
        @else
            <div style="padding: 15px; text-align: center; color: #777;">
                No results found for "{{ $searchTerm }}"
            </div>
        @endif
    </div>
</div>