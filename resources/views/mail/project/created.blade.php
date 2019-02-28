@component('mail::message')
# New Project Created
<p>{{$project->title}}</p>
<p>{{$project->description}}</p>

@component('mail::button', ['url' => url('/projects/' . $project->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
