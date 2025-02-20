@extends ("layout")

@section("page_title")
    Homepage
@endsection

@section("page_content")
    <p>Current time is {{ date("h:i:s") }}</p>
@endsection