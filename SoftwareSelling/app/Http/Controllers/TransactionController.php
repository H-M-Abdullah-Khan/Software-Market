<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaction::query();

        if ($request->filled('orderDate')) {
            $query->whereDate('orderDate', $request->orderDate);
        }
        if ($request->filled('orderId')) {
            $query->where('orderId', 'like', '%' . $request->orderId . '%');
        }
        if ($request->filled('productName')) {
            $query->where('productName', 'like', '%' . $request->productName . '%');
        }
        if ($request->filled('customerName')) {
            $query->where('customerName', 'like', '%' . $request->customerName . '%');
        }
        if ($request->filled('payment')) {
            $query->where('payment', $request->payment);
        }
        if ($request->filled('paymentStatus')) {
            $query->where('paymentStatus', $request->paymentStatus);
        }
        if ($request->filled('minPrice')) {
            $query->where('totalPrice', '>=', $request->minPrice);
        }
        if ($request->filled('maxPrice')) {
            $query->where('totalPrice', '<=', $request->maxPrice);
        }
        if ($request->filled('orderStatus')) {
            $query->where('orderStatus', $request->orderStatus);
        }

        $transactions = $query->orderBy('orderDate', 'desc')->paginate(8)->withQueryString();

        // Example summary data for cards (you should calculate these properly)
        $totalSales = Transaction::sum('totalPrice');
        $totalTransactions = Transaction::count();
        $orderDisputes = 76; // Replace with actual logic
        $orderRefund = 2495; // Replace with actual logic
        $salesChange = 9; // Replace with actual logic
        $transactionChange = -2; // Replace with actual logic
        $disputesChange = 5; // Replace with actual logic
        $refundChange = -11; // Replace with actual logic

        return view('transactions.index', compact(
            'transactions',
            'totalSales',
            'totalTransactions',
            'orderDisputes',
            'orderRefund',
            'salesChange',
            'transactionChange',
            'disputesChange',
            'refundChange'
        ));
    }
}