@props(['article'])

<div class="max-w-6xl mx-auto p-4 md:p-6 lg:p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl shadow-blue-500/20 transition-all duration-300 hover:scale-105">
        <a href="{{route('get-article', $article->slug)}}" class="block">
            <div class="relative h-full bg-white/10 backdrop-blur-lg border border-white/20">
                <!-- Top Accent Line -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 transform origin-left transition-transform duration-300 group-hover:scale-x-110"></div>
                
                <div class="relative p-5">
                    <!-- Category -->
                    <div class="mb-4">
                        <span class="inline-flex items-center space-x-2 px-3 py-1.5 bg-blue-500/70 rounded-full group-hover:bg-blue-500/80 transition-colors duration-300 dark:bg-blue-500/70 dark:group-hover:bg-blue-500/80">
                            <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                            <span class="text-xs font-semibold text-blue-600 tracking-wider uppercase dark:text-blue-400">
                                {{$article->category->name}}
                            </span>
                        </span>
                    </div>

                    <!-- Title -->
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight group-hover:text-blue-600 transition-colors duration-300 mb-2 line-clamp-2 dark:text-gray-200">
                        {{Str::limit($article->heading, 80)}}
                    </h2>
                    
                    <!-- Excerpt -->
                    @if(isset($article->excerpt))
                    <p class="text-lg md:text-xl leading-relaxed mb-4 line-clamp-2 dark:text-gray-400">
                        {{Str::limit($article->excerpt, 150)}}
                    </p>
                    @endif

                    <!-- Meta Information -->
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
                        <!-- Date and Reading Time -->
                        <div class="flex items-center gap-4">
                            <div class="flex items-center text-gray-500 dark:text-gray-300">
                                <svg class="w-4 h-4 mr-1.5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-xs dark:text-sm">{{$article->published_date_formatted}}</span>
                            </div>
                            
                            <div class="flex items-center text-gray-500 dark:text-gray-300">
                                <svg class="w-4 h-4 mr-1.5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-xs dark:text-sm">5 min read</span>
                            </div>
                        </div>

                        <!-- Author Name -->
                        <div class="text-right">
                            <span class="text-sm font-medium text-gray-900 dark:text-gray-200">{{$article->user->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>