<?php

namespace App\Models;

use App\Mail\NotifyCustomer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class OrderStatusHistory extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['order_id','status','notes','location','user_id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    // public  function sendNotification($order_history){

    //     $receiver_name = $order_history->order->receiver_name;

    //     $tracking_number = $order_history->order->tracking_number;

    //     $sms = $message = "Hello ".$receiver_name.", ";

    //     $subject = "Update on ".$tracking_number;
 
    //     switch ($order_history->status) {

    //         case 'PENDING': 

    //             $sms = "Your shipment {$tracking_number} is still pending.";

    //             $message .=$sms;        
              
    //             break;

    //         case 'RECEIVED':

    //             $subject = "Shipment Recieved - {$tracking_number}";

    //             $locations = $order_history->order
    //                         ->packages
    //                         ->pluck('location.name')
    //                         ->unique()
    //                         ->values();

    //             $sms .= "<p>Good news! Your shipment". $order_history->order->tracking_number." has been received at our warehouse in ".$order_history->order->origin_country.", We'll consolidate and ship it soon.</p>";

    //             $message .= $sms;

    //             $message .= "<p>Shipment Details:</p>
    //             <ol>
    //                 <li>Tracking Number: {$order_history->order->tracking_number} </li>
    //                 <li>Received Date: {$order_history->order->received_at}</li>
    //                 <li>Number of Packages: {$order_history->order->packages->count() } </li>
    //                 <li>Total Weight: {$order_history->order->packages->sum('weight')} kg </li>
    //                 <li>Storage Location: {$locations} </li>                   
    //             </ol>";

    //             $message .= "<p> {$order_history->delivery_notes} </p>
    //                         <p>Next Steps:</p>
    //                         <p>Your package will be consolidated with other shipments and dispatched within 3-5 business days. </p>
    //                         <p>Track your shipment:".url('tracking_url/'.$order_history->order->tracking_number)."</p>
    //                         <p>Best regards, <br> Constell and Co</p>";                 
    //             break;

    //         case 'CONSOLIDATED':

    //             $subject = "Shipment Consolidated - {$tracking_number}";

    //             $packages = $order_history->order->packages;

    //             $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id') )->pluck('batch_id');

    //             $batches = ConsolidationBatche::whereIn('id',$batchPackages);

    //             $mawb_number = $batches->pluck('mawb_number')->join(', ');             
             
    //             $details = $batches->map(function ($batch) {
    //                 return "Batch Number: {$batch->mawb_number} - {$batch->transport_mode}: {$batch->container_flight_number} - Expected Departure: {$batch->departure_date}";
    //             })->join(', ');
 
    //             $sms .= "<p> Your shipment ". $order_history->order->tracking_number." has been consolidated into batch ".$mawb_number.", for departure.</p>";

    //             $message .= "<p>Your shipment has been consolidated and is ready for departure!</p>";
                
    //             $message .= "<p>Consolidation Details:</p>

    //             <ol>
    //                 <li>Tracking Number: {$order_history->order->tracking_number} </li>
    //                 <li>{$details} </li>                                               
    //             </ol>";

    //             $message .= "<p>Your package is now grouped with other shipments for efficient transport to Uganda.</p>   
    //                         <p>Track your shipment:".url('tracking_url/'.$order_history->order->tracking_number)."</p>                       
    //                         <p>Best regards, <br> Constell and Co</p>";
                
    //             break;

    //         case 'DISPATCHED':

    //             $subject = "Shipment Departed - {$tracking_number}";

    //             $packages = $order_history->order->packages;

    //             $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id') )->pluck('batch_id');

    //             $batches = ConsolidationBatche::whereIn('id',$batchPackages);

    //             $mawb_number = $batches->pluck('mawb_number')->join(', ');             
             
    //             $details = $batches->map(function ($batch) {
    //                 return "Batch Number: {$batch->mawb_number} - {$batch->transport_mode}: {$batch->container_flight_number} - Expected Departure: {$batch->departure_date}";
    //             })->join(', ');
 
    //             $sms .= "<p> Your shipment ". $order_history->order->tracking_number." is on its way to Uganda!.</p>";

    //             $message .= $sms;
                
    //             $message .= "<p>Departure Details:</p>

    //             <ol>
    //                 <li>Tracking Number: {$order_history->order->tracking_number} </li>
    //                 <li>{$details} </li>                                               
    //             </ol>";

    //             $message .= "<p>You'll receive another notification when your shipment arrives in Uganda.</p>   
    //                         <p>Track your shipment:".url('tracking_url/'.$order_history->order->tracking_number)."</p>                       
    //                         <p>Best regards, <br> Constell and Co</p>";
              
    //             break;

    //         case 'IN_TRANSIT':

    //             $subject = "Shipment now in Transit - {$tracking_number}";

    //             $packages = $order_history->order->packages;

    //             $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id') )->pluck('batch_id');

    //             $batches = ConsolidationBatche::whereIn('id',$batchPackages);

    //             $mawb_number = $batches->pluck('mawb_number')->join(', ');             
             
    //             $details = $batches->map(function ($batch) {
    //                 return "Batch Number: {$batch->mawb_number} - {$batch->transport_mode}: {$batch->container_flight_number} - Expected Departure: {$batch->departure_date}";
    //             })->join(', ');
 
    //             $sms .= "<p> Your shipment ". $order_history->order->tracking_number." is on its way to Uganda!.</p>";

    //             $message .= $sms;
                
    //             $message .= "<p>Details:</p>

    //             <ol>
    //                 <li>Tracking Number: {$order_history->order->tracking_number} </li>
    //                 <li>{$details} </li>                                               
    //             </ol>";

    //             $message .= "<p>You'll receive another notification when your shipment arrives in Uganda.</p>   
    //                         <p>Track your shipment:".url('tracking_url/'.$order_history->order->tracking_number)."</p>                       
    //                         <p>Best regards, <br> Constell and Co</p>";
                
    //             break;

    //         case 'ARRIVED':

    //             $subject = "Shipment now in Transit - {$tracking_number}";

    //             $packages = $order_history->order->packages;

    //             $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id') )->pluck('batch_id');

    //             $batches = ConsolidationBatche::whereIn('id',$batchPackages);

    //             $mawb_number = $batches->pluck('mawb_number')->join(', ');
                
    //             $details = $batches->map(function ($batch) {
    //                 return "Batch Number: {$batch->mawb_number} - {$batch->transport_mode}: {$batch->container_flight_number} - Arrival Date: {$batch->arrived_at}";
    //             })->join(', ');
             
 
    //             $sms .= "<p> Your shipment ". $tracking_number." has arrived in Uganda and is now at customs!.</p>";
 
    //             $message .= "Your shipment has arrived in Uganda!";

    //             $message .= "<p>Details:</p>

    //             <ol>
    //                 <li>Tracking Number: {$order_history->order->tracking_number} </li>
    //                 <li>Arrival Date: {$details} </li>                                               
    //             </ol>

    //             <p>

    //             Next Steps: <br>
    //             1. Customs clearance is in progress<br>
    //             2. You'll receive a customs invoice shortly<br>
    //             3. Once cleared, your package will be ready for delivery<br>
    //             Estimated clearance time: 2-3 business days.                
    //             </p>";

    //             break;

    //         case 'READY_FOR_RELEASE':

    //             $sms = "Your shipment {$tracking_number} is ready for release at customs.";

    //             $message .=$sms;
                
    //             break;

    //         case 'RELEASED':

    //             $sms = "Your shipment {$tracking_number} has been cleared and released from customs.";

    //             $message .=$sms;
               
    //             break;

    //         case 'DELIVERED':

    //             $order_delivery = $order_history->order->deliveryOrder;

    //             $subject = "Out for Delivery - {$tracking_number}";

    //             $sms = "Your shipment {$tracking_number} is out for delivery today. Rider: {$order_delivery->user->full_name}, Phone: {$order_delivery->user->phone}";

    //             $message .= "

    //             Your shipment is out for delivery! <br>

    //             Delivery Details:<br>
    //             - Tracking Number: {$tracking_number}<br>
    //             - Delivery Date: {$order_delivery->delivery_date}<br>
    //             - Delivery Address: {$order_delivery->delivery_address}<br>

    //             Rider Information: <br>
    //             - Name: {$order_delivery->user->full_name} <br>
    //             - Phone: {$order_delivery->user->phone} <br>

    //             Please ensure someone is available to receive the package. A signature will be required.<br>
 
    //             Best regards, <br>
    //             Constell and Co <br> ";
                 
    //             break;
            
    //         default:
            
    //             break;
    //     }

    //     Mail::to($order_history->order->user->email)->send(new NotifyCustomer($message,$subject));

    //     User::sendSms($order_history->order->user->phone, env("APP_NAME")." | ".$sms);
        
    // }


    public function sendNotification($order_history)
        {
            $receiver_name   = $order_history->order->receiver_name;
            $tracking_number = $order_history->order->tracking_number;

            $sms     = "Hello {$receiver_name}, ";
            $message = "Hello {$receiver_name}, ";
            $subject = "Update on {$tracking_number}";

            switch ($order_history->status) {

                case 'PENDING': 
                    $sms = "Your shipment {$tracking_number} is still pending.";
                    $message .= $sms;        
                    break;

                case 'RECEIVED':

                    $subject = "Shipment Received - {$tracking_number}";

                    $locations = $order_history->order
                                ->packages
                                ->map(fn($p) => optional($p->location)->name)
                                ->filter()
                                ->unique()
                                ->values()
                                ->join('<br>');

                    $sms .= "<p>Good news! Your shipment {$tracking_number} has been received at our warehouse in {$order_history->order->origin_country}. We'll consolidate and ship it soon.</p>";

                    $message .= $sms;

                    $message .= "
                        <p><strong>Shipment Details:</strong></p>
                        <ol>
                            <li>Tracking Number: {$tracking_number}</li>
                            <li>Received Date: {$order_history->order->received_at}</li>
                            <li>Number of Packages: {$order_history->order->packages->count()}</li>
                            <li>Total Weight: {$order_history->order->packages->sum('weight')} kg</li>
                            <li>Storage Location: {$locations}</li>
                        </ol>
                        <p>{$order_history->delivery_notes}</p>
                        <p><strong>Next Steps:</strong></p>
                        <p>Your package will be consolidated with other shipments and dispatched within 3–5 business days.</p>
                        <p>Track your shipment: ".url('tracking_url/'.$tracking_number)."</p>
                        <p>Best regards,<br>Constell and Co</p>
                    ";
                    break;

                case 'CONSOLIDATED':

                    $subject = "Shipment Consolidated - {$tracking_number}";

                    $packages = $order_history->order->packages;
                    $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id'))->pluck('batch_id');

                    $batches = ConsolidationBatche::whereIn('id',$batchPackages)->get();

                    $details = $batches->map(function ($batch) {
                        return "Batch {$batch->mawb_number} - {$batch->transport_mode}: {$batch->container_flight_number} - Departure: {$batch->departure_date}";
                    })->join('<br>');

                    $sms .= "<p>Your shipment {$tracking_number} has been consolidated and is ready for departure.</p>";

                    $message .= "
                        <p>Your shipment has been consolidated and is ready for departure.</p>
                        <p><strong>Consolidation Details:</strong></p>
                        <ol>
                            <li>Tracking Number: {$tracking_number}</li>
                            <li>{$details}</li>
                        </ol>
                        <p>Your package is now grouped with other shipments for efficient transport to Uganda.</p>
                        <p>Track your shipment: ".url('tracking_url/'.$tracking_number)."</p>
                        <p>Best regards,<br>Constell and Co</p>
                    ";
                    break;

                case 'DISPATCHED':

                    $subject = "Shipment Departed - {$tracking_number}";

                    $packages = $order_history->order->packages;
                    $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id'))->pluck('batch_id');
                    $batches = ConsolidationBatche::whereIn('id',$batchPackages)->get();

                    $details = $batches->map(function ($batch) {
                        return "Batch {$batch->mawb_number} - {$batch->transport_mode}: {$batch->container_flight_number} - Departure: {$batch->departure_date}";
                    })->join(', ');

                    $sms .= "<p>Your shipment {$tracking_number} is on its way to Uganda.</p>";

                    $message .= $sms;
                    $message .= "
                        <p><strong>Departure Details:</strong></p>
                        <ol>
                            <li>Tracking Number: {$tracking_number}</li>
                            <li>{$details}</li>
                        </ol>
                        <p>You'll receive another notification when your shipment arrives in Uganda.</p>
                        <p>Track your shipment: ".url('tracking_url/'.$tracking_number)."</p>
                        <p>Best regards,<br>Constell and Co</p>
                    ";
                    break;

                case 'IN_TRANSIT':

                    $subject = "Shipment in Transit - {$tracking_number}";

                    $packages = $order_history->order->packages;
                    $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id'))->pluck('batch_id');
                    $batches = ConsolidationBatche::whereIn('id',$batchPackages)->get();

                    $details = $batches->map(function ($batch) {
                        return "Batch {$batch->mawb_number} - {$batch->transport_mode}: {$batch->container_flight_number} - Departure: {$batch->departure_date}";
                    })->join('<br>');

                    $sms .= "<p>Your shipment {$tracking_number} is now in transit to Uganda.</p>";

                    $message .= $sms;
                    $message .= "
                        <p><strong>Details:</strong></p>
                        <ol>
                            <li>Tracking Number: {$tracking_number}</li>
                            <li>{$details}</li>
                        </ol>
                        <p>You'll receive another notification when your shipment arrives in Uganda.</p>
                        <p>Track your shipment: ".url('tracking_url/'.$tracking_number)."</p>
                        <p>Best regards,<br>Constell and Co</p>
                    ";
                    break;

                case 'ARRIVED':

                    $subject = "Shipment Arrived in Uganda - {$tracking_number}";

                    $packages = $order_history->order->packages;
                    $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id'))->pluck('batch_id');
                    $batches = ConsolidationBatche::whereIn('id',$batchPackages)->get();

                    $details = $batches->map(function ($batch) {
                        return "{$batch->transport_mode} ({$batch->mawb_number}) arrived on {$batch->arrived_at}";
                    })->join('<br> ');

                    $sms .= "<p>Your shipment {$tracking_number} has arrived in Uganda and is now at customs.</p>";

                    $message .= "
                        <p>Your shipment has arrived in Uganda!</p>
                        <p><strong>Details:</strong></p>
                        <ol>
                            <li>Tracking Number: {$tracking_number}</li>
                            <li>{$details}</li>
                        </ol>
                        <p><strong>Next Steps:</strong><br>
                        1. Customs clearance in progress<br>
                        2. You'll receive a customs invoice shortly<br>
                        3. Package will be ready for release within 2–3 days</p>
                    ";
                    break;

                case 'READY_FOR_RELEASE':
                    
                    $sms = "Your shipment {$tracking_number} is ready for release at customs.";
                    $message .= $sms;
                    break;

                case 'RELEASED':

                    $sms = "Your shipment {$tracking_number} has been cleared and released from customs.";
                    $message .= $sms;
                    break;

                case 'DELIVERED':

                    $subject = "Shipment Delivered at - {$order_history->order->receiver_address}";

                    $packages = $order_history->order->packages;
                    $batchPackages = BatchPackage::whereIn('package_id',$packages->pluck('id'))->pluck('batch_id');
                    $batches = ConsolidationBatche::whereIn('id',$batchPackages)->get();

                    $details = $batches->map(function ($batch) {
                        return "{$batch->transport_mode} ({$batch->mawb_number}) arrived on {$batch->arrived_at}";
                    })->join('<br> ');

                    $message .= "<p>Your shipment {$tracking_number} has been delivered at {$order_history->order->receiver_address}.</p>";

                break;

            }

            Mail::to($order_history->order->user->email)
                ->send(new NotifyCustomer($message, $subject));

            User::sendSms(
                $order_history->order->user->phone,strip_tags($sms)
            );
        }

}
