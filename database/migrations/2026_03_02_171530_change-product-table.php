<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')
                  ->nullable()
                  ->after('id')
                  ->constrained('categories')
                  ->nullOnDelete();
            
            $table->decimal('sale_price', 10, 2)->nullable()->unsigned()->after('price');
            $table->string('image')->nullable()->after('stock');
            $table->boolean('is_active')->default(1)->after('image');
            $table->boolean('is_deleted')->default(0)->after('is_active');
            
            $table->decimal('price', 10, 2)->unsigned()->change();
            $table->integer('stock')->default(0)->unsigned()->change();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn(['category_id', 'sale_price', 'image', 'is_active', 'is_deleted']);
        });
    }
};
