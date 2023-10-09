public function show($id)
{
$cast = DB::table('cast')->where('id', $id)->first();
return view('cast.show', compact('cast'));
}
