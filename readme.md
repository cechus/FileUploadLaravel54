#Upload Images in laravel 5.4

go to 
```
<localserver>/upload
```

##Code for file upload


###Code in Route or Controller

```php
Route::post('/upload',function ()
{
	// dd(request()->file('image'));
	// $time=Carbon::now();
	$time="2017-09-09 10:12:21";
	$file = request()->file('image');
	$ext = $file->guessClientExtension();
	// $ext = $file->extension();
	$path = "hola".'/'."mundo";
	$imageName = str_random(10).".".$ext;
	// $file->storeAs($path,$imageName ,'public');
	// $file->storeAs('images/','image.'.$ext);
	// request()->file('image')->store('images');
	 request()->file('image')->move(public_path('images'), $imageName);
	return back();
});
```
###Code View

```html
<form action="/upload" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
	<input type="file" id="file" name="image" >
	<button type="submit"> Enviar </button>
</form>
```
