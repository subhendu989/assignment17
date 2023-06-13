<!-- ans-1 -->
$users = DB::table('users')
            ->select('name', 'email')
            ->where('active', true)
            ->orderBy('name')
            ->get();


<!-- ans-2 -->

use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->select('excerpt', 'description')
            ->get();

print_r($posts);

<!-- ans-3 -->

use Illuminate\Support\Facades\DB;

$uniqueEmails = DB::table('users')
                ->select('email')
                ->distinct()
                ->get();
<!-- ans-4 -->

use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->where('id', 2)
            ->first();

if ($posts) {
    echo $posts->description;
} else {
    echo "No record found.";
}

<!-- ans-5 -->

use Illuminate\Support\Facades\DB;

$description = DB::table('posts')
                ->where('id', 2)
                ->value('description');

echo $description;

<!-- ans-6 -->

1. first() Method:

// The first() method retrieves the first record that matches the query criteria.
Example: DB::table('users')->where('active', true)->first();
// Behavior: It returns a single object representing the first matching record. If no record is found, it returns null.
// Considerations: It is commonly used when you want to retrieve a single record based on certain conditions or retrieve the first record from a result set.
find() Method:

** The find() method retrieves a record by its primary key value.
Example: DB::table('users')->find(1);
** Behavior: It returns a single object representing the record with the specified primary key. If no record is found, it returns null.
** Considerations: It is primarily used when you know the primary key value of the record you want to retrieve.

<!-- ans-7 -->

use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->select('title')
            ->get();

print_r($posts);

<!-- ans-8 -->

use Illuminate\Support\Facades\DB;

$result = DB::table('posts')->insert([
    'title' => 'X',
    'slug' => 'X',
    'excerpt' => 'excerpt',
    'description' => 'description',
    'is_published' => true,
    'min_to_read' => 2
]);

echo $result ? "Record inserted successfully!" : "Failed to insert record.";

<!-- ans-9 -->

use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 2)
                ->update([
                    'excerpt' => 'Laravel 10',
                    'description' => 'Laravel 10'
                ]);

echo "Number of affected rows: " . $affectedRows;

<!-- ans-10 -->

use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 3)
                ->delete();

echo "Number of affected rows: " . $affectedRows;

<!-- ans-11 -->

count() method:

use Illuminate\Support\Facades\DB;

$totalUsers = DB::table('users')->count();
// Retrieves the total number of rows in the "users" table

$activeUsers = DB::table('users')->where('status', 'active')->count();
// Retrieves the number of rows in the "users" table where the "status" column is 'active'

**sum(): method
use Illuminate\Support\Facades\DB;

$totalSales = DB::table('orders')->sum('amount');
// Calculates the sum of the "amount" column in the "orders" table

** avg() 

use Illuminate\Support\Facades\DB;

$averageRating = DB::table('reviews')->avg('rating');
// Calculates the average value of the "rating" column in the "reviews" table

** max()

use Illuminate\Support\Facades\DB;

$highestScore = DB::table('students')->max('score');
// Retrieves the maximum value from the "score" column in the "students" table

**min()

use Illuminate\Support\Facades\DB;

$lowestPrice = DB::table('products')->min('price');
// Retrieves the minimum value from the "price" column in the "products" table


<!-- ans-14 -->

use Illuminate\Support\Facades\DB;

$posts = DB::table('posts')
            ->whereBetween('min_to_read', [1, 5])
            ->get();

print_r($posts);


<!-- ans-15 -->

use Illuminate\Support\Facades\DB;

$affectedRows = DB::table('posts')
                ->where('id', 3)
                ->increment('min_to_read');

echo "Number of affected rows: " . $affectedRows;
