<template>
  <div>
    <loader v-if="loading" />
    
    <!-- Statistics Cards -->
    <div class="row mb-4">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Total Projects') }}</h6>
                <h2 class="mb-0 fw-bold text-primary">{{ statistics.projects?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.projects?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.projects?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-primary-transparent">
                <i class="ri-folder-3-line fs-40 text-primary"></i>
              </div>
            </div>
            <div class="mt-3">
              <small class="text-muted">
                <i class="ri-calendar-line"></i> {{ t('global.This Month') }}: <strong>{{ statistics.projects?.this_month || 0 }}</strong>
              </small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Total Services') }}</h6>
                <h2 class="mb-0 fw-bold text-success">{{ statistics.services?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.services?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.services?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-success-transparent">
                <i class="ri-service-line fs-40 text-success"></i>
              </div>
            </div>
            <div class="mt-3">
              <small class="text-muted">
                <i class="ri-calendar-line"></i> {{ t('global.This Month') }}: <strong>{{ statistics.services?.this_month || 0 }}</strong>
              </small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Total Articles') }}</h6>
                <h2 class="mb-0 fw-bold text-info">{{ statistics.articles?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.articles?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.articles?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-info-transparent">
                <i class="ri-article-line fs-40 text-info"></i>
              </div>
            </div>
            <div class="mt-3">
              <small class="text-muted">
                <i class="ri-calendar-line"></i> {{ t('global.This Month') }}: <strong>{{ statistics.articles?.this_month || 0 }}</strong>
              </small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Contact Messages') }}</h6>
                <h2 class="mb-0 fw-bold text-warning">{{ statistics.contact_messages?.total || 0 }}</h2>
                <small class="text-muted">
                  {{ t('global.Today') }}: <strong class="text-warning">{{ statistics.contact_messages?.today || 0 }}</strong>
                </small>
              </div>
              <div class="statistics-icon bg-warning-transparent">
                <i class="ri-mail-line fs-40 text-warning"></i>
              </div>
            </div>
            <div class="mt-3">
              <small class="text-muted">
                <i class="ri-calendar-line"></i> {{ t('global.This Week') }}: <strong>{{ statistics.contact_messages?.this_week || 0 }}</strong>
              </small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Row Statistics -->
    <div class="row mb-4">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Subscribers') }}</h6>
                <h2 class="mb-0 fw-bold text-danger">{{ statistics.subscribes?.total || 0 }}</h2>
                <small class="text-muted">
                  {{ t('global.This Month') }}: <strong>{{ statistics.subscribes?.this_month || 0 }}</strong>
                </small>
              </div>
              <div class="statistics-icon bg-danger-transparent">
                <i class="ri-user-heart-line fs-40 text-danger"></i>
              </div>
            </div>
            <div class="mt-3">
              <small class="text-muted">
                <i class="ri-calendar-line"></i> {{ t('global.This Week') }}: <strong>{{ statistics.subscribes?.this_week || 0 }}</strong>
              </small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Clients') }}</h6>
                <h2 class="mb-0 fw-bold text-purple">{{ statistics.clients?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.clients?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.clients?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-purple-transparent">
                <i class="ri-group-line fs-40 text-purple"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Team Members') }}</h6>
                <h2 class="mb-0 fw-bold text-teal">{{ statistics.teams?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.teams?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.teams?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-teal-transparent">
                <i class="ri-team-line fs-40 text-teal"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Testimonials') }}</h6>
                <h2 class="mb-0 fw-bold text-indigo">{{ statistics.testimonials?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.testimonials?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.testimonials?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-indigo-transparent">
                <i class="ri-quote-text fs-40 text-indigo"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Third Row Statistics -->
    <div class="row mb-4">
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Home Sliders') }}</h6>
                <h2 class="mb-0 fw-bold text-pink">{{ statistics.home_sliders?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.home_sliders?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.home_sliders?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-pink-transparent">
                <i class="ri-slideshow-line fs-40 text-pink"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Project Categories') }}</h6>
                <h2 class="mb-0 fw-bold text-orange">{{ statistics.project_categories?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.project_categories?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.project_categories?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-orange-transparent">
                <i class="ri-folder-2-line fs-40 text-orange"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="card custom-card statistics-card">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="text-muted mb-2">{{ t('global.Service Videos') }}</h6>
                <h2 class="mb-0 fw-bold text-cyan">{{ statistics.service_videos?.total || 0 }}</h2>
                <small class="text-muted">
                  <span class="text-success">{{ statistics.service_videos?.active || 0 }}</span> {{ t('global.Active') }} |
                  <span class="text-danger">{{ statistics.service_videos?.inactive || 0 }}</span> {{ t('global.Inactive') }}
                </small>
              </div>
              <div class="statistics-icon bg-cyan-transparent">
                <i class="ri-video-line fs-40 text-cyan"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Activity & Monthly Growth -->
    <div class="row">
      <!-- Recent Activity -->
      <div class="col-xl-6 col-lg-12 mb-4">
        <div class="card custom-card">
          <div class="card-header">
            <h5 class="card-title mb-0">
              <i class="ri-pulse-line me-2"></i>
              {{ t('global.Recent Activity') }}
            </h5>
            <p class="text-muted mb-0">{{ t('global.Last 7 Days') }}</p>
          </div>
          <div class="card-body">
            <div class="list-group list-group-flush">
              <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                <div>
                  <i class="ri-folder-3-line text-primary me-2"></i>
                  <span>{{ t('global.Projects') }}</span>
                </div>
                <span class="badge bg-primary-transparent rounded-pill">{{ recentActivity.projects || 0 }}</span>
              </div>
              <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                <div>
                  <i class="ri-service-line text-success me-2"></i>
                  <span>{{ t('global.Services') }}</span>
                </div>
                <span class="badge bg-success-transparent rounded-pill">{{ recentActivity.services || 0 }}</span>
              </div>
              <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                <div>
                  <i class="ri-article-line text-info me-2"></i>
                  <span>{{ t('global.Articles') }}</span>
                </div>
                <span class="badge bg-info-transparent rounded-pill">{{ recentActivity.articles || 0 }}</span>
              </div>
              <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                <div>
                  <i class="ri-mail-line text-warning me-2"></i>
                  <span>{{ t('global.Contact Messages') }}</span>
                </div>
                <span class="badge bg-warning-transparent rounded-pill">{{ recentActivity.contact_messages || 0 }}</span>
              </div>
              <div class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                <div>
                  <i class="ri-user-heart-line text-danger me-2"></i>
                  <span>{{ t('global.Subscribers') }}</span>
                </div>
                <span class="badge bg-danger-transparent rounded-pill">{{ recentActivity.subscribes || 0 }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Monthly Growth Chart -->
      <div class="col-xl-6 col-lg-12 mb-4">
        <div class="card custom-card">
          <div class="card-header">
            <h5 class="card-title mb-0">
              <i class="ri-line-chart-line me-2"></i>
              {{ t('global.Monthly Growth') }}
            </h5>
            <p class="text-muted mb-0">{{ t('global.Last 6 Months') }}</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>{{ t('global.Month') }}</th>
                    <th class="text-center">{{ t('global.Projects') }}</th>
                    <th class="text-center">{{ t('global.Services') }}</th>
                    <th class="text-center">{{ t('global.Articles') }}</th>
                    <th class="text-center">{{ t('global.Messages') }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(month, index) in monthlyGrowth" :key="index">
                    <td>
                      <span v-if="locale === 'ar'">{{ month.month_ar }}</span>
                      <span v-else>{{ month.month }}</span>
                    </td>
                    <td class="text-center">
                      <span class="badge bg-primary-transparent">{{ month.projects }}</span>
                    </td>
                    <td class="text-center">
                      <span class="badge bg-success-transparent">{{ month.services }}</span>
                    </td>
                    <td class="text-center">
                      <span class="badge bg-info-transparent">{{ month.articles }}</span>
                    </td>
                    <td class="text-center">
                      <span class="badge bg-warning-transparent">{{ month.contact_messages }}</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import { useI18n } from 'vue-i18n';
import adminApi from '../../api/adminAxios';
import Loader from '../../components/Loader.vue';

export default {
  name: 'dashboard',
  components: {
    Loader
  },
  setup() {
    const { t, locale } = useI18n();
    const loading = ref(false);
    const statistics = ref({});
    const recentActivity = ref({});
    const monthlyGrowth = ref([]);

    const getStatistics = async () => {
      loading.value = true;
      try {
        const response = await adminApi.get('dashboard/statistics');
        console.log('📊 Dashboard API Response:', response);
        console.log('📊 Response Data:', response.data);
        console.log('📊 Response Status:', response.status);
        
        // responseJson returns: { message, data, pagination }
        // So data is in response.data.data
        if (response.data && response.data.data) {
          statistics.value = response.data.data.statistics || {};
          recentActivity.value = response.data.data.recent_activity || {};
          monthlyGrowth.value = response.data.data.monthly_growth || [];
        } else {
          console.warn('⚠️ No data in response', response.data);
        }
      } catch (error) {

      } finally {
        loading.value = false;
      }
    };

    onMounted(() => {
      getStatistics();
    });

    return {
      t,
      locale,
      loading,
      statistics,
      recentActivity,
      monthlyGrowth
    };
  }
};
</script>

<style scoped>
.statistics-card {
  border: none;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  border-left: 4px solid transparent;
}

.statistics-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
}

.statistics-card .card-body {
  padding: 1.5rem;
}

.statistics-icon {
  width: 60px;
  height: 60px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.bg-primary-transparent {
  background-color: rgba(85, 110, 230, 0.1);
}

.bg-success-transparent {
  background-color: rgba(10, 207, 151, 0.1);
}

.bg-info-transparent {
  background-color: rgba(0, 184, 217, 0.1);
}

.bg-warning-transparent {
  background-color: rgba(255, 193, 7, 0.1);
}

.bg-danger-transparent {
  background-color: rgba(220, 53, 69, 0.1);
}

.bg-purple-transparent {
  background-color: rgba(138, 43, 226, 0.1);
}

.bg-teal-transparent {
  background-color: rgba(20, 184, 166, 0.1);
}

.bg-indigo-transparent {
  background-color: rgba(99, 102, 241, 0.1);
}

.bg-pink-transparent {
  background-color: rgba(236, 72, 153, 0.1);
}

.bg-orange-transparent {
  background-color: rgba(251, 146, 60, 0.1);
}

.bg-cyan-transparent {
  background-color: rgba(6, 182, 212, 0.1);
}

.text-purple {
  color: #8a2be2;
}

.text-teal {
  color: #14b8a6;
}

.text-indigo {
  color: #6366f1;
}

.text-pink {
  color: #ec4899;
}

.text-orange {
  color: #fb923c;
}

.text-cyan {
  color: #06b6d4;
}

.badge {
  padding: 0.35em 0.65em;
  font-weight: 500;
}

.list-group-item {
  padding: 1rem 0;
}

.list-group-item:first-child {
  padding-top: 0;
}

.list-group-item:last-child {
  padding-bottom: 0;
}

.card-header {
  border-bottom: 1px solid rgba(0, 0, 0, 0.08);
  padding: 1.25rem;
}

.card-title {
  font-size: 1.1rem;
  font-weight: 600;
}

.table th {
  font-weight: 600;
  font-size: 0.875rem;
  text-transform: uppercase;
  color: #6c757d;
  border-bottom: 2px solid #e9ecef;
}

.table td {
  vertical-align: middle;
  padding: 0.75rem;
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.02);
}
</style>
