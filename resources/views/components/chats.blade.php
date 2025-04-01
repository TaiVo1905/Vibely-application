<div class="chat-content content-chat">
    <div class="title">
        <h2>Messages</h2>
        <img src="{{asset('images/messages.svg')}}" alt="messages">
    </div>
    @include('components.search_bar')
    <div class="tab-container">
        <div class="tab-active">Primary</div>
        <div class="tab">General</div>
        <div class="tab-request">Request (2)</div>
    </div>
    <div class="chats">
        @for ($i = 0; $i < 12; $i++)
            @include('components.chat')
        @endfor
    </div>
</div>