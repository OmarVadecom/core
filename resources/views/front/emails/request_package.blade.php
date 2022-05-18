@extends('front.emails.layout')

@section('title', 'Vadecom Website :: Contact Us')

@section('content')
    <table cellspacing='3' cellpadding='0' width='900' border='1' style='width:450.0pt;border:solid #cccccc 1.0pt' dir='rtl'>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الإسم:</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>{{ $client['client_name'] }}</td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>التليفون :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                <a href='tel:{{ $client['client_phone_number'] }}'> {{ $client['client_phone_number'] }} </a>
            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الإيميل :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                <a href="mailto:{{ $client['client_email_address'] }}">{{ $client['client_email_address'] }}</a>
            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الطلب :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'> {{ $package->title_translated_piped }} </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الرسالة :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                {{ $client['message'] }}
            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>بتاريخ :</td> <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                {{ date('Y-m-d h:iA') }}
            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>IP :</td> <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>{{ request()->ip() }}</td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>من صفحة :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>{{ URL::previous() }}</td>
        </tr>
    </table>
@endsection