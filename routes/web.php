<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



// Get all contacts
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');

// Show form to create a new contact
Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Store a new contact
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');

// Show a single contact
Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');

// Show form to edit a contact
Route::get('contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Update a contact
Route::put('contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');

// Delete a contact
Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
