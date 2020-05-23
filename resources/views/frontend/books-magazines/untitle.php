@if($purchase->getManagePurchage()->count())
						@foreach($purchase->getManagePurchage()->get() as $manage)
							<td>{{$manage->new_unit_price}}</td>
							<td>{{$manage->new_total_price}}</td>
							<td>{{$manage->date}}</td>
							<td class="text-center">
								<a class="action-btn bg-green edit_purchase" id="purchase" data-target="#edit_purchase" data-toggle="modal" href="javascript:void(0);"><i class="fa fa-pencil-square-o" id="{{$manage->id}}"></i></a>
							</td>
						@endforeach
						@else
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td class="text-center">
							<a class="action-btn bg-green manage_purchase" id="purchase" data-target="#manage_purchase" data-toggle="modal" href="javascript:void(0);"><i class="fa fa-pencil-square-o" id="{{$purchase->id}}"></i></a>
						</td>
						@endif

string(21) "0.62811800 1517994515"
string(21) "0.25195700 1517994516"


string(21) "0.56493500 1517994567"
string(21) "0.18691500 1517994568"


float(1517994692.3702)
float(1517994693.0518)


float(1517994662.9894)
float(1517994663.6463)

var_dump(microtime(true));
		$purchases = $purchases->map(function($value){
			// $sum = $value->total_pc * $value->unit_price;
			// $value->sum = $sum;
			$managePur = $value->getManagePurchage()->first();
			$value->manage_purchase = $managePur;
			return $value;
		});
		var_dump(microtime(true));
		// foreach ($purchases as $key => &$value) {
		// 	$managePur = $value->getManagePurchage()->first();
		// 	$value->manage_purchase = $managePur;
		// }
		// var_dump(microtime(true));
		// $purchases = $purchases->filter(function($value){
		// 	return $value->size == "35-39";
		// });
		/*$purchases = $purchases->map(function($value){
			// $sum = $value->total_pc * $value->unit_price;
			// $value->sum = $sum;
			$managePur = $value->getManagePurchage()->first();
			$value->manage_purchase = $managePur;
			return $value;
		});*/
		//var_dump($purchases); return "";