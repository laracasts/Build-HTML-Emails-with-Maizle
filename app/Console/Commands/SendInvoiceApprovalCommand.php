<?php

namespace App\Console\Commands;

use App\Mail\InvoiceApprovalMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendInvoiceApprovalCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-invoice-approval-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send invoice approval email.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('valid@address.com')->send(new InvoiceApprovalMail());
    }
}
