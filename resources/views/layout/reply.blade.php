<!-- Reply  -->
<div class="reply_form_container">
    <div class="reply_form_title">Bình luận</div>
    @if(session('message'))
    <div class="alert alert-{{ session('status') }}">
        <strong>{{ session('message') }}</strong>
    </div>
    @endif
    <form action="{{ url('comment') }}" id="reply_form" class="reply_form" method="POST">
        <div class="row">
            {{ csrf_field() }}
            <input type="hidden" name="article_id" value="{{ $article->id }}">
            <div class="col-md-6">
                <input type="text" class="reply_input" value="{{ Auth::user()->name }}" readonly="">
            </div>
            <div class="col-md-6">
                <input type="email" class="reply_input" value="{{ Auth::user()->email }}" readonly="">
            </div>
        </div>
        <textarea class="reply_input reply_textarea" name="content" placeholder="Nội dung" required="required"></textarea>
        <button class="reply_button trans_200">Gửi</button>
    </form>
</div>
