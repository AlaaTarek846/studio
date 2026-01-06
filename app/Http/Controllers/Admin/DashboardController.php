<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\Article;
use App\Models\ContactMessage;
use App\Models\Subscribe;
use App\Models\Client;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\HomeSlider;
use App\Models\ProjectCategory;
use App\Models\ServiceVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function statistics()
    {
        $now = Carbon::now();
        $startOfMonth = $now->copy()->startOfMonth();
        $startOfWeek = $now->copy()->startOfWeek();
        $startOfYear = $now->copy()->startOfYear();

        // Debug: Test database connections
        \Log::info('Dashboard Statistics - Testing database connections');
        \Log::info('Projects count: ' . Project::count());
        \Log::info('Services count: ' . Service::count());
        \Log::info('Articles count: ' . Article::count());

        // Total Statistics
        $statistics = [
            'projects' => [
                'total' => Project::count(),
                'active' => Project::where('status', 1)->count(),
                'inactive' => Project::where('status', 0)->count(),
                'this_month' => Project::where('created_at', '>=', $startOfMonth)->count(),
                'this_week' => Project::where('created_at', '>=', $startOfWeek)->count(),
            ],
            'services' => [
                'total' => Service::count(),
                'active' => Service::where('status', 1)->count(),
                'inactive' => Service::where('status', 0)->count(),
                'this_month' => Service::where('created_at', '>=', $startOfMonth)->count(),
            ],
            'articles' => [
                'total' => Article::count(),
                'active' => Article::where('status', 1)->count(),
                'inactive' => Article::where('status', 0)->count(),
                'this_month' => Article::where('created_at', '>=', $startOfMonth)->count(),
            ],
            'contact_messages' => [
                'total' => ContactMessage::count(),
                'this_month' => ContactMessage::where('created_at', '>=', $startOfMonth)->count(),
                'this_week' => ContactMessage::where('created_at', '>=', $startOfWeek)->count(),
                'today' => ContactMessage::whereDate('created_at', $now->toDateString())->count(),
            ],
            'subscribes' => [
                'total' => Subscribe::count(),
                'this_month' => Subscribe::where('created_at', '>=', $startOfMonth)->count(),
                'this_week' => Subscribe::where('created_at', '>=', $startOfWeek)->count(),
            ],
            'clients' => [
                'total' => Client::count(),
                'active' => Client::where('status', 1)->count(),
                'inactive' => Client::where('status', 0)->count(),
            ],
            'teams' => [
                'total' => Team::count(),
                'active' => Team::count(), // Teams table doesn't have status column
                'inactive' => 0, // Teams table doesn't have status column
            ],
            'testimonials' => [
                'total' => Testimonial::count(),
                'active' => Testimonial::where('status', 1)->count(),
                'inactive' => Testimonial::where('status', 0)->count(),
            ],
            'home_sliders' => [
                'total' => HomeSlider::count(),
                'active' => HomeSlider::where('status', 1)->count(),
                'inactive' => HomeSlider::where('status', 0)->count(),
            ],
            'project_categories' => [
                'total' => ProjectCategory::count(),
                'active' => ProjectCategory::where('status', 1)->count(),
                'inactive' => ProjectCategory::where('status', 0)->count(),
            ],
            'service_videos' => [
                'total' => ServiceVideo::count(),
                'active' => ServiceVideo::where('status', 1)->count(),
                'inactive' => ServiceVideo::where('status', 0)->count(),
            ],
        ];

        // Recent Activity (Last 7 days)
        $recentActivity = [
            'projects' => Project::where('created_at', '>=', $now->copy()->subDays(7))->count(),
            'services' => Service::where('created_at', '>=', $now->copy()->subDays(7))->count(),
            'articles' => Article::where('created_at', '>=', $now->copy()->subDays(7))->count(),
            'contact_messages' => ContactMessage::where('created_at', '>=', $now->copy()->subDays(7))->count(),
            'subscribes' => Subscribe::where('created_at', '>=', $now->copy()->subDays(7))->count(),
        ];

        // Monthly Growth (Last 6 months)
        $monthlyGrowth = [];
        for ($i = 5; $i >= 0; $i--) {
            $monthStart = $now->copy()->subMonths($i)->startOfMonth();
            $monthEnd = $now->copy()->subMonths($i)->endOfMonth();
            
            $monthlyGrowth[] = [
                'month' => $monthStart->format('M Y'),
                'month_ar' => $this->getArabicMonth($monthStart->month) . ' ' . $monthStart->year,
                'projects' => Project::whereBetween('created_at', [$monthStart, $monthEnd])->count(),
                'services' => Service::whereBetween('created_at', [$monthStart, $monthEnd])->count(),
                'articles' => Article::whereBetween('created_at', [$monthStart, $monthEnd])->count(),
                'contact_messages' => ContactMessage::whereBetween('created_at', [$monthStart, $monthEnd])->count(),
            ];
        }

        // Debug: Log statistics before returning
        \Log::info('Dashboard Statistics Result:', [
            'statistics' => $statistics,
            'recent_activity' => $recentActivity,
            'monthly_growth_count' => count($monthlyGrowth)
        ]);

        $response = responseJson([
            'statistics' => $statistics,
            'recent_activity' => $recentActivity,
            'monthly_growth' => $monthlyGrowth,
        ], 'Statistics retrieved successfully', 200);

        // Debug: Log response structure
        \Log::info('Dashboard Response:', [
            'response_type' => get_class($response),
            'response_content' => $response->getContent()
        ]);

        return $response;
    }

    private function getArabicMonth($month)
    {
        $months = [
            1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل',
            5 => 'مايو', 6 => 'يونيو', 7 => 'يوليو', 8 => 'أغسطس',
            9 => 'سبتمبر', 10 => 'أكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
        ];
        return $months[$month] ?? '';
    }
}
