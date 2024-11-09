@props(['article'])

<div class="w-full transform transition-all duration-300 hover:-translate-y-2">
    <a href="{{route('get-article', $article->slug)}}" class="block h-full">
        <div class="relative h-full bg-white rounded-2xl overflow-hidden group border border-gray-100/50 hover:border-blue-100 shadow-sm hover:shadow-xl transition-all duration-300">
            <!-- Top Accent Line -->
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 via-indigo-500 to-violet-500 transform origin-left transition-transform duration-300 group-hover:scale-x-110"></div>
            
            <div class="relative p-5">
                <!-- Category -->
                <div class="mb-4">
                    <span class="inline-flex items-center space-x-2 px-3 py-1.5 bg-blue-50/70 rounded-full group-hover:bg-blue-100/80 transition-colors duration-300">
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-600"></div>
                        <span class="text-xs font-semibold text-blue-600 tracking-wider uppercase">
                            {{$article->category->name}}
                        </span>
                    </span>
                </div>

                <!-- Title -->
                <h2 class="text-lg font-bold text-gray-800 leading-tight tracking-tight group-hover:text-blue-600 transition-colors duration-300 mb-2 line-clamp-2">
                    {{Str::limit($article->heading, 80)}}
                </h2>
                
                <!-- Excerpt -->
                @if(isset($article->excerpt))
                <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-2">
                    {{Str::limit($article->excerpt, 150)}}
                </p>
                @endif

                <!-- Meta Information -->
                <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                    <!-- Date and Reading Time -->
                    <div class="flex items-center gap-4">
                        <div class="flex items-center text-gray-500">
                            <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-xs">{{$article->published_date_formatted}}</span>
                        </div>
                        
                        <div class="flex items-center text-gray-500">
                            <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-xs">5 min read</span>
                        </div>
                    </div>

                    <!-- Author Name -->
                    <div class="text-right">
                        <span class="text-sm font-medium text-gray-900">{{$article->user->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>