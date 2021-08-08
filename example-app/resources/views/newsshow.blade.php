@extends('layouts.main')
@section('content')
    @foreach($news as $n)
        <h2 class="section-heading">{{ $n['title'] }}</h2>
         <blockquote class="blockquote">{{ $n['description'] }}</blockquote>
               <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>
              <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
              <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>
              <h2 class="section-heading">Reaching for the Stars</h2>
             <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
             <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>
             <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
             <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>
             <p>
                 Placeholder text by
                 <a href="http://spaceipsum.com/">Space Ipsum</a>
                 &middot; Images by
                 <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
              </p>
    @endforeach
@endsection