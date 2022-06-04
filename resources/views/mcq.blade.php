@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" id="mcq-card"></div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        window.addEventListener('load', function () {
            mcq.loadQuestion({ questionNo : <?php echo (session('question_no'))?session('question_no'):1?>, testDone : <?php echo (session('test_done') 
            != '') ? 'true':'false'; ?> });
        })
    </script>
@endpush
