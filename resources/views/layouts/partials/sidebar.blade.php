<div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">
          EDo you see any Teletubbies in here? Do you see a slender plastic tag clipped
          to my shirt with my name printed on it? Do you see a little Asian child with a blank expression
          on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well,
          that's what you see at a toy store. And you must think you're in a toy store, because you're
          here shopping for an infant named Jeb.
        </p>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            @foreach($tags as $tag)
            <li>
                <a href="/posts/tags/{{ $tag->name }}">{{$tag->name}}</a>
            </li> 
            @endforeach
        

        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
        </ol>
    </div>
