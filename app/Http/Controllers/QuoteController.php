<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quote;
use JWTAuth;


class QuoteController extends Controller
{
    public function postQuote(Request $request)
    {

      // if (!$user =JWTAuth::parseToken()->authenticate()){
      //   return response()->json(['message' => 'user not found'], 404);
      // }
      // $user = JWTAuth::parseToken()->toUser();
       

       $quote = new Quote();
       $quote->content = $request->input('content');
       $quote->save();
       return response()->json(['quote' => $quote, 'user' => $user], 201);
    }

    public function getQuotes()
    {  
    	$quotes = Quote::all();
    	$response = [
           'quotes' => $quotes
    	];
    	return response()->json($response, 200);

    }

    public function putQuote(Request $request, $id)
    {
       $quote = Quote::find($id);
       if (!$quote) {
       	  return response()->json(['message' => 'Document not fond', 404]);
       }
       $quote->content = $request->input('content');
       $quote->save();
       return response()->json(['quote' => $quote], 200);
    }

    public function deleteQuote($id)
    {
      $quote = Quote::find($id);
      $quote->delete();
      return response()->json(['message' => 'Quote deleted', 200]);
    }


}
