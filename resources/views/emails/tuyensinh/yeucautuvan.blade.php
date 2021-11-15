@component('mail::message')
# Yêu cầu tư vấn tuyển sinh mới

Thông tin cụ thể như sau:

@component('mail::table')
| Họ tên                 | Số điện thoại          | Ngành học                | Địa chỉ                   |
| ---------------------- | :--------------------: | :----------------------: | :-----------------------: |
| {{ $data['tvtsten'] }} | {{ $data['tvtssdt'] }} | {{ $data['tvtsnganh'] }} | {{ $data['tvtsdiachi'] }} |
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
