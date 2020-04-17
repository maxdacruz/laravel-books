<h2>List of Books</h2>


  @foreach ($books as $book)
  {{ $book->title }}
  {{ $book->price }}
  <a href="{{ url('book/update/' . $book->id  ) }}" >Edit</a>

  <button class="delete" data-id="{{ $book->id }}" data-token="{{ csrf_token() }}" >Delete</button>
  <hr>
  @endforeach
