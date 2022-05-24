<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\calculator;

class JakatController extends Controller
{
    
    public function index()
    {
        return view('jakat_final');
    }

    // public function calculate(Request $request)
    // {
    //     // dd($request->input('rupa_price'));
    //     // $gold= $request->input('gold');
    //     // $rupa= $request->input('rupa_price');
    //     // $nagad_money= $request->input('nagad_money');
    //     // $my_asset_others= $request->input('my_asset_others');
    //     // $my_asset_others_lone= $request->input('my_asset_others_lone');
    //     // $security_money= $request->input('security_money');
    //     // $forign_money= $request->input('forign_money');
    //     // $bank_money= $request->input('bank_money');
    //     // $special_money= $request->input('special_money');
    //     // $bank_money_geranty= $request->input('bank_money_geranty');
    //     // $bima_money= $request->input('bima_money');
    //     // $bond_money= $request->input('bond_money');
    //     // $provident_fund= $request->input('provident_fund');
    //     // $company_share= $request->input('company_share');
    //     // $selary_money= $request->input('selary_money');
    //     // $company_share_capital=$request->input('company_share_capital');
    //     // $some_shonchoy_money=$request->input('some_shonchoy_money');
    //     // $invest_money=$request->input('invest_money');
    //     // $lone_money=$request->input('lone_money');
    //     // $result_sum=0;

        
    //     // $result_sum= $gold + $rupa + $nagad_money+$my_asset_others+$my_asset_others_lone+$security_money+$forign_money+$bank_money+$special_money+$bank_money_geranty+$bima_money+$bond_money+$provident_fund+$company_share+ $selary_money+$company_share_capital+$some_shonchoy_money+$invest_money+$lone_money;

    //     // // dd($result_sum);
    //     // //ব্যবসায়িক সম্পদ
    //     // $business_property=$request->input('business_property');
    //     // $business_house=$request->input('business_house');
    //     // $business_car=$request->input('business_car');
    //     // $company_business=$request->input('company_business');
    //     // $business_raw_products=$request->input('business_raw_products');
    //     // $business_animal=$request->input('business_animal');
    //     // $business_result='0';

    //     // $business_result= $business_property+$business_house+$business_car+$company_business+$business_raw_products+$business_animal;

    //     // // dd($result_sum+$business_result);

    //     // //যাকাতের সম্পদ থেকে বিয়োগযোগ্য ঋণ
    //     // $house_loan=$request->input('house_loan');
    //     // $personal_loan=$request->input('personal_loan');
    //     // $business_loan=$request->input('business_loan');
    //     // $rent_tax=$request->input('rent_tax');
    //     // $staff_salary=$request->input('staff_salary');
    //     // $transactions_loan=$request->input('transactions_loan');
    //     // $development_loan=$request->input('development_loan');
    //     // $installment_loan=$request->input('installment_loan');
    //     // $wife_loan=$request->input('wife_loan');
    //     // $loan_result='0';

    //     // $loan_result= $house_loan+$personal_loan+$business_loan+$rent_tax+$staff_salary+$transactions_loan+$development_loan+$installment_loan+$wife_loan;

    //     // return view('jakatview')
    //     // ->with('result_sum', $result_sum)
    //     // ->with('business_result', $business_result)
    //     // ->with('loan_result', $loan_result);
    // }
}