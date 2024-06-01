<div class="chat__wrapper  pt-mb-2 pb-md-1">
    <div class="chat__messaging messaging-member--online pb-2 pb-md-2 pl-2 pl-md-4 pr-2">
        <div class="chat__previous d-flex d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--previous" viewBox="0 0 45.5 30.4">
                <path
                    d="M43.5,13.1H7l9.7-9.6A2.1,2.1,0,1,0,13.8.6L.9,13.5h0L.3,14v.6c0,.1-.1.1-.1.2v.4a2,2,0,0,0,.6,1.5l.3.3L13.8,29.8a2.1,2.1,0,1,0,2.9-2.9L7,17.2H43.5a2,2,0,0,0,2-2A2.1,2.1,0,0,0,43.5,13.1Z"
                    fill="#f68b3c"></path>
            </svg>
        </div>
        <div class="chat__notification d-flex d-md-none chat__notification--new">
            <span>1</span>
        </div>
        <div class="chat__infos pl-2 pl-md-0">
            <div class="chat-member__wrapper" data-online="true">
                @php
                    $img = $chat->users->first()?->image_path;

                    if ($chat->is_support_chat) {
                        $img = asset('asset/images/help-desk.png');
                    } elseif (!$chat->course_id) {
                        $img = asset('asset/images/group_chat.png');
                    }

                @endphp
                <div class="chat-member__avatar">
                    <img src="{{ $img }}"
                        alt="{{ $chat->title ?? ($chat->course->name ?? $chat->users->first()->full_name) }}"
                        loading="lazy">
                    <div class="user-status user-status--large"></div>
                </div>
                <div class="chat-member__details">
                    <span class="chat-member__name">
                        <span>
                            {{ $chat->title ?? ($chat->course->name ?? $chat->users->first()->full_name) }}
                        </span>
                        <span>
                            @if ($chat->is_support_chat && auth()->user()->user_type == 'supervisor')
                                <x-assign-supervisor :chat="$chat" />
                            @endif
                            @if (auth()->user()->user_type == 'teacher')
                                <x-manage-students :chat="$chat" />
                            @endif
                        </span>
                    </span>
                    {{-- <span class="chat-member__status">Online</span>
                    <span class="chat-member__status">Last seen 18hr</span> --}}
                </div>
            </div>
        </div>
    </div>
    <div id="chat__content" class="chat__content pt-4 px-3">
        <div id="loading1" style="display: none !important;">
            <div class="spinner-border d-flex mx-auto" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <ul class="chat__list-messages">

            @foreach ($messages as $message)
                @if ($message->user_id == auth()->id())
                    <li class="chat__msg-me">
                        <div class="chat_user_img">
                            <img width="34" height="34" src="{{ $message?->user?->image_path ?? '' }}"
                                loading="lazy">
                        </div>
                        <div class="chat__bubble chat__bubble--me">
                            @if ($message->type == 'text')
                                {{ $message->message }}
                            @elseif($message->type == 'image')
                                <a href="{{ $message->data_url }}" data-fancybox="gallery" data-caption="Single image">

                                    <img class="img-thumbnail message-image" src="{{ $message->data_url }}"
                                        loading="lazy">
                                </a>
                            @elseif($message->type == 'file')
                                <a href="{{ $message->data_url }}" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fa fa-download"></i>
                                    {{ __('Download') }}
                                </a>
                            @endif
                        </div>
                    </li>
                @else
                    <li title="{{ $message->user->full_name }}">
                        <div class="chat_user_img">
                            <img width="34" height="34" src="{{ $message?->user?->image_path ?? '' }}"
                                loading="lazy">
                        </div>
                        {{-- <div class="chat__time">Yesterday at 16:43</div> --}}
                        <div class="chat__bubble chat__bubble--you">
                            @if ($message->type == 'text')
                                {{ $message->message }}
                            @elseif($message->type == 'image')
                                <a data-src="{{ $message->data_url }}" data-fancybox="gallery"
                                    data-caption="Single image">
                                    <img class="img-thumbnail message-image" src="{{ $message->data_url }}"
                                        loading="lazy">
                                </a>
                            @elseif($message->type == 'file')
                                <a href="{{ $message->data_url }}" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fa fa-download"></i>
                                    {{ __('Download') }}
                                </a>
                            @endif
                        </div>
                    </li>
                @endif
            @endforeach

            <li class="d-flex justify-content-center align-content-center align-items-center">
                <div id="loading2" style="display: none !important;" class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </li>
        </ul>
    </div>
    <form id="message-form" action="/api/sendMessage" method="POST" enctype="multipart/form-data">
        <div class="chat__send-container px-1 px-md-2 pt-1 pt-md-2 ">
            <div class="custom-form__send-wrapper ">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <input name="message" type="text" class="form-control custom-form" id="message"
                    placeholder="{{ __('write_message') }}" autocomplete="off">

                <div class="custom-form__send-img">
                    <input type="file" id="photo-upload" accept="image/*" style="display: none;">
                    <label for="photo-upload">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-img"
                            viewBox="0 0 45.7 45.7">
                            <path
                                d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z"
                                fill="#f68b3c"></path>
                        </svg>
                    </label>
                </div>
                {{-- <div id="emoji-picker-trigger" class="custom-form__send-emoji">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-emoji"
                        viewBox="0 0 46.2 46.2">
                        <path
                            d="M23.1,0A23.1,23.1,0,1,0,46.2,23.1,23.1,23.1,0,0,0,23.1,0Zm0,41.6A18.5,18.5,0,1,1,41.6,23.1,18.5,18.5,0,0,1,23.1,41.6Zm8.1-20.8a3.5,3.5,0,0,0,3.5-3.5,3.5,3.5,0,0,0-7,0,3.5,3.5,0,0,0,3.5,3.5ZM15,20.8a3.5,3.5,0,0,0,3.5-3.5A3.5,3.5,0,0,0,15,13.9a3.4,3.4,0,0,0-3.4,3.4A3.5,3.5,0,0,0,15,20.8Zm8.1,15a12.6,12.6,0,0,0,10.5-5.5,1.7,1.7,0,0,0-1.3-2.6H14a1.7,1.7,0,0,0-1.4,2.6A12.9,12.9,0,0,0,23.1,35.8Z"
                            fill="#f68b3c"></path>
                    </svg>
                </div> --}}
                <button type="submit" class="custom-form__send-submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send" viewBox="0 0 45.6 45.6">
                        <g>
                            <path
                                d="M20.7,26.7a1.4,1.4,0,0,1-1.2-.6,1.6,1.6,0,0,1,0-2.4L42.6.5a1.8,1.8,0,0,1,2.5,0,1.8,1.8,0,0,1,0,2.5L21.9,26.1A1.6,1.6,0,0,1,20.7,26.7Z"
                                fill="#d87232"></path>
                            <path
                                d="M29.1,45.6a1.8,1.8,0,0,1-1.6-1L19.4,26.2,1,18.1a1.9,1.9,0,0,1-1-1.7,1.8,1.8,0,0,1,1.2-1.6L43.3.1a1.7,1.7,0,0,1,1.8.4,1.7,1.7,0,0,1,.4,1.8L30.8,44.4a1.8,1.8,0,0,1-1.6,1.2ZM6.5,16.7l14.9,6.6a2,2,0,0,1,.9.9l6.6,14.9L41,4.6Z"
                                fill="#d87232"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>

<div id="MeTemplate" style="display: none;">
    <li class="chat__msg-me">
        <div class="chat_user_img">
            <img width="34" height="34" src="#user_image" loading="lazy">
        </div>
        <div class="chat__bubble chat__bubble--me ">
            MESSAGE_CONTENT
        </div>
    </li>
</div>

<div id="UserTemplate" style="display: none;">
    <li title="#title">
        <div class="chat_user_img">
            <img width="34" height="34" src="#user_image" loading="lazy">
        </div>
        <div class="chat__bubble chat__bubble--you ">
            MESSAGE_CONTENT
        </div>
    </li>
</div>



<script>
    var pusher = new Pusher('b09510518c6918a2f97e', {
        cluster: 'ap2'
    });

    var chat = 'chat_' + "{{ $chat->id }}";

    var channel = pusher.subscribe(chat);

    var displayedMessageIds = [];


    channel.bind('App\\Events\\ChatMessageSent', function(data) {

        let message = data.data.message;

        if (displayedMessageIds.includes(message.id)) {
            return;
        }

        displayedMessageIds.push(message.id);


        var user_id = "{{ auth()->id() }}";
        if (message.user_id != user_id) {
            var template = $('#UserTemplate').html();

            template = template.replace('#user_image', message.user
                .image_path);

            template = template.replace('#title', message.user
                .full_name);

            var messageContent = '';
            if (message.type === 'text') {
                messageContent = message.message;
            } else if (message.type === 'image') {
                messageContent =
                    `
                    <a href="${message.data_url}" data-fancybox>
                        <img class="img-thumbnail message-image" src="${message.data_url}" loading="lazy">
                    </a>
                `;
            } else if (message.type === 'file') {
                messageContent = '<a href="' + message.data_url +
                    '" target="_blank" class="btn btn-primary btn-sm">' +
                    '<i class="fa fa-download"></i> {{ __('Download') }}</a>';
            }

            // Replace the placeholder with the message content in the template
            template = template.replace('MESSAGE_CONTENT',
                messageContent);

            $('.chat__list-messages').append(template);
        }

    });
</script>
<script>
    setTimeout(function() {
        var chatContent = document.getElementById('chat__content');
        chatContent.scrollTop = chatContent.scrollHeight;
    }, 500);


    $('#photo-upload').change(function() {
        var file = $(this).prop('files')[0];
        if (file) {
            // check the mime type

            let type = 'image';
            let value = validateImageType(file);
            if (!value) type = 'file';

            value = validateFileType(file);
            if (!value && type == 'file') {
                alert(
                    'Please select an image file (png, jpg, jpeg, gif) or file (pdf,doc,docx,xls,xlsx,ppt,pptx).'
                );
                return;
            }


            // Check file size
            if (!validateFileSize(file)) {
                alert('Please select an file smaller than 2MB.');
                return;
            }


            var formData = new FormData();
            formData.append(type, file);
            formData.append('chat_id', '{{ $chat->id }}');
            formData.append('user_id', '{{ auth()->id() }}');
            formData.append('type', type);
            formData.append('_token', '{{ csrf_token() }}');

            // Send the AJAX request to upload the image
            $('#loading2').show();
            $.ajax({
                url: '/api/sendMessage',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var message = response.message;
                    var template = $('#MeTemplate').html();



                    template = template.replace('#user_image', message.user
                        .image_path);

                    // Replace the placeholder with the message content based on the type
                    var messageContent = '';
                    if (message.type === 'text') {
                        messageContent = message.message;
                    } else if (message.type === 'image') {
                        messageContent = `
                                            <a href="${message.data_url}" data-fancybox>
                                                <img class="img-thumbnail message-image" src="${message.data_url}" loading="lazy">
                                            </a>
                                        `;
                    } else if (message.type === 'file') {
                        messageContent = '<a href="' + message.data_url +
                            '" target="_blank" class="btn btn-primary btn-sm">' +
                            '<i class="fa fa-download"></i> {{ __('Download') }}</a>';
                    }

                    // Replace the placeholder with the message content in the template
                    template = template.replace('MESSAGE_CONTENT',
                        messageContent);

                    $('#message').val('');

                    // Append the template to the messages container
                    $('.chat__list-messages').append(template);

                    // Scroll to the bottom of the messages container
                    $('.chat__content').scrollTop($('.chat__content')[0]
                        .scrollHeight);
                    $('#loading2').hide();

                },
                error: function(xhr, status, error) {
                    // Handle the error response
                }
            });
        }
    });


    $(document).ready(function() {
        $('#message-form').submit(function(e) {
            e.preventDefault(); // Prevent the form from submitting normally

            if ($('#message').val().length == 0) {
                return;
            }
            var formData = new FormData(this);
            formData.append('chat_id', '{{ $chat->id }}')
            formData.append('type', 'text')

            $('#loading2').show();

            // Send the AJAX request
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var message = response.message;
                    var template = $('#MeTemplate').html();

                    template = template.replace('#user_image', message.user
                        .image_path);

                    // Replace the placeholder with the message content based on the type
                    var messageContent = '';
                    if (message.type === 'text') {
                        messageContent = message.message;
                    } else if (message.type === 'image') {
                        messageContent = '<img class="img-thumbnail message-image" src="' +
                            message
                            .data_url +
                            '" loading="lazy">';
                    } else if (message.type === 'file') {
                        messageContent = '<a href="' + message.data_url +
                            '" target="_blank" class="btn btn-primary btn-sm">' +
                            '<i class="fa fa-download"></i> {{ __('Download') }}</a>';
                    }

                    // Replace the placeholder with the message content in the template
                    template = template.replace('MESSAGE_CONTENT',
                        messageContent);

                    $('#message').val('');

                    // Append the template to the messages container
                    $('.chat__list-messages').append(template);

                    // Scroll to the bottom of the messages container
                    $('.chat__content').scrollTop($('.chat__content')[0]
                        .scrollHeight);

                    $('#loading2').hide();

                },
                error: function(xhr, status, error) {
                    toastr.error('Something went wrong!');
                }
            });
        });
    });

    function validateFileType(file) {
        var allowedTypes = ['application/pdf', 'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-powerpoint',
            'application/vnd.openxmlformats-officedocument.presentationml.presentation'
        ];
        return allowedTypes.includes(file.type);
    }

    // Function to validate the file size
    function validateFileSize(file) {
        var maxSize = 2 * 1024 * 1024; // 2MB
        return file.size <= maxSize;
    }

    function validateImageType(file) {
        var allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/svg+xml'];
        console.log(file.type);
        return allowedTypes.includes(file.type);
    }
</script>

<script>
    $(document).ready(function() {
        var chatContent = $('#chat__content');
        var isLoading = false;

        chatContent.scroll(function() {
            if (chatContent.scrollTop() === 0 && !isLoading) {
                // Reached the top of the chat__content div
                console.log('load');
                isLoading = true;
                loadOlderMessages();
            }
        });

        let page = 2;

        let user_id = '{{ auth()->id() }}';

        let messageContainer = $('.chat__list-messages');

        function loadOlderMessages() {
            // Perform an AJAX request to fetch older messages
            $('#loading1').show();
            let url = '/api/getMessage/{chat_id}';
            url = url.replace('{chat_id}', '{{ $chat->id }}');
            $.ajax({
                url: url, // Replace with your API endpoint
                type: 'GET',
                data: {
                    page: page
                }, // Provide any necessary parameters
                success: function(response) {
                    console.log(response.messages);
                    var messages = response.messages.data;

                    messages.forEach(message => {
                        if (message.user_id == user_id) {
                            var template = $('#MeTemplate').html();

                            template = template.replace('#user_image', message.user
                                .image_path);



                            // Replace the placeholder with the message content based on the type
                            var messageContent = '';
                            if (message.type === 'text') {
                                messageContent = message.message;
                            } else if (message.type === 'image') {
                                messageContent =
                                    '<img class="img-thumbnail message-image" src="' +
                                    message
                                    .data_url +
                                    '" loading="lazy">';
                            } else if (message.type === 'file') {
                                messageContent = '<a href="' + message.data_url +
                                    '" target="_blank" class="btn btn-primary btn-sm">' +
                                    '<i class="fa fa-download"></i> {{ __('Download') }}</a>';
                            }

                            // Replace the placeholder with the message content in the template
                            template = template.replace('MESSAGE_CONTENT',
                                messageContent);

                            messageContainer.prepend(template);

                        } else {
                            var template = $('#UserTemplate').html();

                            template = template.replace('#user_image', message.user
                                .image_path);

                            template = template.replace('#title', message.user
                                .full_name);
                            // Replace the placeholder with the message content based on the type
                            var messageContent = '';
                            if (message.type === 'text') {
                                messageContent = message.message;
                            } else if (message.type === 'image') {
                                messageContent =
                                    '<img class="img-thumbnail message-image" src="' +
                                    message
                                    .data_url +
                                    '" loading="lazy">';
                            } else if (message.type === 'file') {
                                messageContent = '<a href="' + message.data_url +
                                    '" target="_blank" class="btn btn-primary btn-sm">' +
                                    '<i class="fa fa-download"></i> {{ __('Download') }}</a>';
                            }

                            // Replace the placeholder with the message content in the template
                            template = template.replace('MESSAGE_CONTENT',
                                messageContent);

                            messageContainer.prepend(template);

                        }
                    });

                    page++;
                    isLoading = false;
                    $('#loading1').hide();
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                    isLoading = false;
                }
            });
        }
    });
</script>


{{-- @endsection --}}
