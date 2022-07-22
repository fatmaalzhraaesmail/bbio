@extends('front.master')
@section('content')


<section>
<div class="container">

    <canvas class="my-4 w-100"  width="100" height="3"></canvas>


  <div class="row">

    <div class="col-md-3">
        <h3 class=" text-bold text-center">Details Page</h3>

        <div class="btn-group-vertical  w-100 d-flex mx-auto">
            <a type="button" href="/" class="btn  mb-2 d-block  btn-success"  style="text-decoration: none;">Go Back</a>
            <button type="button" onclick="NaiveFunction()" class="btn  mt-1 mb-2 d-block btn-info">Naive Algorithm!!</button>
            <button type="button" onclick="BooyerFunction()" class="btn mb-2 d-block btn-success">Booyer Algorithm!!</button>
            <button type="button" onclick="KmpFunction()" class="btn mb-2 d-block btn-primary"> KMP Algorithm!!</button>
            <button type="button" onclick="rabinKarpFunction()" class="btn mb-2 d-block btn-warning">Karp Algorithm</button>
            <button type="button"  onclick="DnaToRna()" class="btn mb-2 d-block btn-secondary">Dna To Rna</button>
          </div>
    </div>

        <div class="col-sm-9 text-center">

            <img src="{{url('images',$algorithms->image)}}" class="h-50 w-100 " alt="cardImagecap" >
            <h2 class=" text-bold mt-4"><?php echo ucwords($algorithms->algorithm_name) ?></h2>
            <h5>Details:  {{$algorithms->algorithm_info}}</h5>
<br><br>
        
        
        
        </div><!-- col-sm-9 -->
</div><!-- row -->
</div><!-- container -->
{{-- <h1 class="text-center">You Can Try It</h1> --}}




<div class="container py-2"  id="naive" style="display:none;">
 <h3 class=" text-bold text-center">Naive Algorithm</h3>
    <form method="" id="formId"  name="form1"  action="" class="mx-auto w-100">
        <div class="form-group d-flex">
            <label  for="txtNum1">Enter Text :</label>
            <input id="text1" class="form-control" type="text" name="txt1" placeholder="write first number">
        </div>

        <div class="form-group d-flex">
            <label for="txtNum2">Enter Pattern :</label>
            <input id="text2" class="form-control" type="text" name="pat2">
        </div>

        <input type="button"  value="Search For It" onclick="search( document.getElementById('text1').value ,document.getElementById('text2').value ); return false"
         class="btn btn-output mt-2 mx-auto px-5 d-block">


    </form>

 <div class=" output mt-3">
    <span id="result" class=" text-center  "></span>
 </div>

</div>



<div class="container py-2"  id="booyer" style="display:none;">
    <h3 class="  text-center">Booyer Algorithm</h3>

    <form method="" id=""  name="form1"  action="" class="mx-auto w-100">
        <div class="form-group d-flex">
            <label  for="txtNum1">Enter Text :</label>
            <input id="text3" class="form-control" type="text" name="txt3" placeholder="write first number">
        </div>

        <div class="form-group d-flex">
            <label for="txtNum2">Enter Pattern :</label>
            <input id="text4" class="form-control" type="text" name="pat4">
        </div>

        <input type="button" id="tt" value="Search For It" onclick=" Booyer_algorithm( document.getElementById('text3').value.split('') ,document.getElementById('text4').value.split('') );"
         class="btn btn-output mt-2 mx-auto px-5 d-block">
    </form>
 <div class=" output mt-3 text-center">
    <span id="badBooyer" class=" "></span>
 </div>
</div>





<div class="container py-2"  id="kmp" style="display:none;">
    <h3 class="  text-center">KMP Algorithm</h3>

    <form method="" id="formId"  name="form1"  action="" class="mx-auto w-100">
        <div class="form-group d-flex">
            <label  for="txtNum1">Enter Text :</label>
            <input id="text5" class="form-control" type="text" value="ABABDABACDABABCABAB" >
        </div>

        <div class="form-group d-flex">
            <label for="txtNum2">Enter Pattern :</label>
            <input id="text6" class="form-control" type="text" value="ABABCABAB">
        </div>

        <input type="button" value="Search For It" onclick="KMPSearch(document.getElementById('text6').value,document.getElementById('text5').value); return false"
         class="btn btn-output mt-2 mx-auto px-5 d-block">
    </form>
 <div class=" output text-center mb-2 mt-3">
    <span id="re" class="mb-2 "></span>
 </div>

</div>



<div class="container py-2"  id="rabin-karp" style="display:none;">
    <h3 class="  text-center">Rabin Karp Algorithm</h3>

    <form method="" id="formId"  name="form1"  action="" class="mx-auto w-100">
        <div class="form-group d-flex">
            <label  for="txtNum1">Enter Pattern :</label>
            <input id="text7" class="form-control" type="text"  value="GEEKS">
        </div>

        <div class="form-group d-flex">
            <label for="txtNum2">Enter Text:</label>
            <input id="text8" class="form-control" type="text" value="GEEKS FOR GEEKS" >
        </div>
        <div class="form-group d-flex">
            <label for="txtNum2">Enter prime Number q:</label>
            <input id="text9" class="form-control" type="text" value="101" >
        </div>

        <input type="button" id="" value="Search For It" onclick="Karp( document.getElementById('text7').value ,document.getElementById('text8').value,	Number(document.getElementById('text9').value)); return false"
         class="btn btn-output mt-2 mx-auto px-5 d-block">
    </form>
 <div class=" output text-center  mt-3 mb-3">
    <span id="rabinKarp" class=""></span>
 </div>
</div>



<div class="container py-2"  id="dna" style="display:none;">
    <h3 class=" text-center">Dna To Rna Algorithm</h3>

    <form method="" id="formId"  name="form1"  action="" class="mx-auto w-100">
        <div class="form-group d-flex">
            <label  for="txtNum1">Enter Dna :</label>
            <input id="text10" class="form-control" type="text"  value="">
        </div>




        <input type="button" id="" value="Search For It" onclick="DnaConvert();return false"
         class="btn btn-output mt-2 mx-auto px-5 d-block">
    </form>
 <div class=" output mt-3 text-center">
    <span id="rna" ></span>
 </div>
</div>





<script>
 search(txt, pat);
	function search(txt, pat)
	{
		let M = pat.length;
		let N = txt.length;

		/* A loop to slide pat one by one */
		for (let i = 0; i <= N - M; i++) {
			let j;
			for (j = 0; j < M; j++)
				if (txt[i + j] != pat[j])
					break;
			// if pat[0...M-1] = txt[i, i+1, ...i+M-1]
			if (j == M)
            document.getElementById('result').innerHTML+= "<h3>"+"Pattern found at index " + i + "</br>"+"</h3>";
        }
    }

</script>




<script>

    let NO_OF_CHARS = 256;

    function max (a,b)
    {
        return (a > b)? a: b;
    }


    function badCharHeuristic(str,size,badchar)
    {
        for (let i = 0; i < NO_OF_CHARS; i++)
            badchar[i] = -1;

        for (i = 0; i < size; i++)
            badchar[ str[i].charCodeAt(0)] = i;
    }


    function Booyer_algorithm(txt,pat)
    {
        let m = pat.length;
        let n = txt.length;

        let badchar = new Array(NO_OF_CHARS);


        badCharHeuristic(pat, m, badchar);

        let s = 0; // s is shift of the pattern with
        while(s <= (n - m))
        {
            let j = m-1;


            while(j >= 0 && pat[j] == txt[s+j])
                j--;

            if (j < 0)
            {
                document.getElementById('badBooyer').innerHTML+="Patterns occur at shift = " + s;

                s += (s+m < n)? m-badchar[txt[s+m].charCodeAt(0)] : 1;

            }

            else

                s += max(1, j - badchar[txt[s+j].charCodeAt(0)]);
        }
    }

    /* Driver program to test above function */
    // let txt="ABAAABCD".split("");
    // let pat = "ABC".split("");
</script>



<script>

 function KMPSearch(pat, txt)
 {
	let M= pat.length;
	let N = txt.length;

	
	let lps = new Array(M);

	computeLPSArray(pat, M, lps);

	let i = 0; // index for txt[]
	 let j = 0; // index for pat[]
	while (i < N) {
		if (pat[j] == txt[i]) {
			j++;
			i++;
		}

		if (j == M) {
			document.getElementById('re').innerHTML +="Found pattern at index " +(i - j);
			j = lps[j - 1];
		}

		else if (i < N && pat[j] != txt[i]) {
			// Do not match lps[0..lps[j-1]] characters,
			// they will match anyway
			if (j != 0)
				j = lps[j - 1];
			else
				i = i + 1;
		}
	}
 }
 function computeLPSArray(pat, M, lps)
 {
	 let len = 0;

	lps[0] = 0; // lps[0] is always 0

	i = 1;
	while (i < M) {
		if (pat[i] == pat[len]) {
			len++;
			lps[i] = len;
			i++;
		}
		else // (pat[i] != pat[len])
		{
		
			if (len != 0) {
				len = lps[len - 1];

			
			}

			else // if (len == 0)
			{
				lps[i] = 0;
				i++;
			}

		}

	}
 }


        


</script>



<script>
 let d = 256;
 function Karp(pat, txt, q)
 {
	let M = pat.length;
	let N = txt.length;
	let i, j;

	// Hash value for pattern
	let p = 0;

	// Hash value for txt
	let t = 0;
	let h = 1;

	// The value of h would be "pow(d, M-1)%q"
	for(i = 0; i < M - 1; i++)
		h = (h * d) % q;


	for(i = 0; i < M; i++)
	{
		p = (d * p + pat[i].charCodeAt()) % q;
		t = (d * t + txt[i].charCodeAt()) % q;
	}

	// Slide the pattern over text one by one
	for(i = 0; i <= N - M; i++)
	{


		if (p == t)
		{

			/* Check for characters one by one */
			for(j = 0; j < M; j++)
			{
				if (txt[i+j] != pat[j])
					break;
			}

			// if p == t and pat[0...M-1] =
			// txt[i, i+1, ...i+M-1]
			if (j == M)
			document.getElementById('rabinKarp').innerHTML+= "Pattern found at index " + i + "<br/>";
		}
        // document.getElementById('rabinKarp').innerHTML+= "Pattern found at index " + i + "<br/>";

		if (i < N - M)
		{
			t = (d * (t - txt[i].charCodeAt() * h) +
					txt[i + M].charCodeAt()) % q;


			if (t < 0)
				t = (t + q);
		}
	}
 }
</script>

<script>
 var dnna= [""];
 function DnaConvert(){
    var input=document.getElementById('text10').value;
    dnna.push(input);
    var pval="";
    for (let j = 0; j < dnna.length; j++){
        pval=pval+ dnna[j] +"<br/>";
    //  document.getElementById('result').innerHTML=pval;

    }
    const dna=pval;
    function DNAtoRNA(dna) {
    let str = '';
    for(let i = 0; i < dna.length; i++){
  //   if(dna[i] === 'T'){
   if (dna[i] == 'T'){
   str += 'U';
   } else {
   str += dna[i];
   }
 }
 return str;
 }

 document.getElementById('rna').innerHTML=DNAtoRNA(dna);
 }
</script>






















<script>
 var naive=document.getElementById("naive");
function NaiveFunction(){
    var style=naive.style.display;

        if(style=='block')
        	{
            naive.style.display='none';
        	}
    	else{
            naive.style.display='block';
        	}
    }

















var booyer=document.getElementById("booyer");
function BooyerFunction(){
    var stylle=booyer.style.display;

        if(stylle=='block')
        	{
                booyer.style.display='none';
        	}
    	else{
            booyer.style.display='block';
        	}
    }


var kmp=document.getElementById("kmp");
function KmpFunction(){
    var stylle=kmp.style.display;

        if(stylle=='block')
        	{
                kmp.style.display='none';
        	}
    	else{
            kmp.style.display='block';
        	}
    }
var karp=document.getElementById("rabin-karp");
function rabinKarpFunction(){
    var style=karp.style.display;

        if(style=='block')
        	{
                karp.style.display='none';
        	}
    	else{
            karp.style.display='block';
        	}
    }
var dna=document.getElementById("dna");
function DnaToRna(){
    var style=dna.style.display;

        if(style=='block')
        	{
                dna.style.display='none';
        	}
    	else{
            dna.style.display='block';
        	}
    }

</script>














</section>


    {{-- <section class="mt-4 pt-4">

        <div class="container">
            <h2 class="text-center text-warning">Display Comments</h2>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th>comment Id</th>
                            <th>user Name</th>
                            <th>user Email</th>
                            <th>comment</th>
                        </tr>

                    </thead>

                    <tbody>

                @forelse ($dishes->comments as $comment )
                <tr>
               <td> <strong class="text-primary">{{ $comment->id }}</strong></td>
               <td> <strong class="text-primary">{{ $comment->user->name }}</strong></td>
               <td><p class="text-bold text-success"> {{$comment->user->email}}</p></td>
                <td><h5 class="text-bold text-success">{{$comment->comment}}</h5></td>
           </tr>
           </tbody>
           </table>


        @empty
        <h3 class="text-danger text-center">No Comments Yet .</h3>

        @endforelse


            </div><!-- col-md-10 -->
        </div><!-- row -->

        </div><!-- container -->


    </section>


        <div class="container my-4">
            <div class="row">

<h2 class="text-warning text-center">You Can Add Comment Here</h2>
                <div class="col-md-8 col-sm-9 d-block mx-auto ">
                    <div class="panel-body  ">


                        {!! Form::open(['method'=>'post', 'route'=>['comment',$dishes->id]]) !!}
                      <div class="form-group d-flex mb-2">
                            {{ Form::label('name', 'Name:') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}

                        </div>


                        <div class="form-group d-flex mb-2">
                            {{ Form::label('email', 'Email:') }}
                            {{ Form::text('email', null, array('class' => 'form-control')) }}

                        </div>

                        <div class="form-group d-flex mb-2">
                            {{ Form::label('comment', 'Comment:') }}
                            {{ Form::textarea('comment', null, array('class' => 'form-control','rows'=>'5' )) }}

                        </div>


                        <div class="form-group d-flex">
                        {{ Form::submit('Add Comment', array('class' => 'btn d-block  px-4 mt-3 mx-auto go text-white text-bold ')) }}
                        </div
                    {!! Form::close() !!}

                        </div>
            </div><!-- col-md-8 -->
            </div><!-- row -->

        </div><!-- container -->

 --}}






@endsection
