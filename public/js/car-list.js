// Car Rental List Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    
    // Force show all car cards initially
    showAllCars();
    
    // Initialize filters
    initializeFilters();
    
    // Button event listeners
    initializeButtons();
    
    // Lazy loading for images
    initializeLazyLoading();
    
    // Search functionality
    initializeSearch();
    
    // Debug: Log car cards count
    console.log('Car cards found:', document.querySelectorAll('.car-card').length);
});

// Force show all car cards
function showAllCars() {
    const carCards = document.querySelectorAll('.car-card');
    carCards.forEach(card => {
        card.style.display = 'block';
        card.style.opacity = '1';
        card.style.visibility = 'visible';
        card.classList.remove('hidden');
    });
}

// Filter functionality for rental cars
function initializeFilters() {
    const capacityFilter = document.getElementById('capacity-filter');
    const priceFilter = document.getElementById('price-filter');
    const typeFilter = document.getElementById('type-filter');
    const carCards = document.querySelectorAll('.car-card');
    
    if (!capacityFilter || !priceFilter || !typeFilter) return;
    
    // Add event listeners to all filters
    [capacityFilter, priceFilter, typeFilter].forEach(filter => {
        filter.addEventListener('change', applyFilters);
    });
    
    function applyFilters() {
        const selectedCapacity = capacityFilter.value;
        const selectedPrice = priceFilter.value;
        const selectedType = typeFilter.value.toLowerCase();
        
        let visibleCount = 0;
        
        carCards.forEach(card => {
            const cardCapacity = card.dataset.capacity;
            const cardPrice = parseInt(card.dataset.price) || 0;
            const cardType = card.dataset.type?.toLowerCase() || '';
            
            let showCard = true;
            
            // Capacity filter
            if (selectedCapacity && cardCapacity !== selectedCapacity) {
                showCard = false;
            }
            
            // Price filter
            if (selectedPrice) {
                const [minPrice, maxPrice] = selectedPrice.split('-').map(p => 
                    p === '+' ? Infinity : parseInt(p) || 0
                );
                
                if (maxPrice === undefined) {
                    // Handle "800+" case
                    if (cardPrice < minPrice) showCard = false;
                } else {
                    if (cardPrice < minPrice || cardPrice > maxPrice) showCard = false;
                }
            }
            
            // Type filter
            if (selectedType && cardType !== selectedType) {
                showCard = false;
            }
            
            // Show/hide card with animation
            if (showCard) {
                card.classList.remove('hidden');
                card.style.animation = 'fadeInUp 0.5s ease forwards';
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });
        
        // Show no results message if needed
        showNoResultsMessage(visibleCount === 0);
    }
}

// Reset filters function
function resetFilters() {
    document.getElementById('capacity-filter').value = '';
    document.getElementById('price-filter').value = '';
    document.getElementById('type-filter').value = '';
    
    document.querySelectorAll('.car-card').forEach(card => {
        card.classList.remove('hidden');
        card.style.animation = 'fadeInUp 0.5s ease forwards';
    });
    
    const noResultsMsg = document.querySelector('.no-results-message');
    if (noResultsMsg) {
        noResultsMsg.remove();
    }
}

// Button event listeners
function initializeButtons() {
    // Detail buttons
    document.querySelectorAll('.btn-detail').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const carCard = this.closest('.car-card');
            const carName = carCard.querySelector('.car-name').textContent;
            
            // Add loading state
            const originalText = this.textContent;
            this.innerHTML = '<div class="loading"></div>';
            this.disabled = true;
            
            // Simulate loading
            setTimeout(() => {
                this.textContent = originalText;
                this.disabled = false;
                showCarDetails(carName, carCard);
            }, 800);
        });
    });
    
    // Booking buttons
    document.querySelectorAll('.btn-book').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const carCard = this.closest('.car-card');
            const carName = carCard.querySelector('.car-name').textContent;
            const carPrice = carCard.querySelector('.price-value').textContent;
            
            // Add loading state
            const originalText = this.textContent;
            this.innerHTML = '<div class="loading"></div>';
            this.disabled = true;
            
            // Simulate loading
            setTimeout(() => {
                this.textContent = originalText;
                this.disabled = false;
                showBookingModal(carName, carPrice, carCard);
            }, 600);
        });
    });
    
    // Promo buttons
    document.querySelectorAll('.promo-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const promoCard = this.closest('.promo-card');
            const carPrice = promoCard.querySelector('.promo-price-value').textContent;
            const capacity = promoCard.querySelector('.promo-capacity span').textContent;
            
            // Add loading state
            const originalText = this.textContent;
            this.innerHTML = '<div class="loading"></div>';
            this.disabled = true;
            
            // Simulate loading
            setTimeout(() => {
                this.textContent = originalText;
                this.disabled = false;
                showPromoBookingModal(carPrice, capacity, promoCard);
            }, 800);
        });
    });
    
    // CTA buttons
    document.querySelectorAll('.btn-primary, .btn-secondary').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (this.textContent.includes('Hubungi CS')) {
                e.preventDefault();
                contactCustomerService();
            } else if (this.textContent.includes('Syarat')) {
                e.preventDefault();
                showTermsAndConditions();
            }
        });
    });
}

// Show car details function
function showCarDetails(carName, carCard) {
    const capacity = carCard.querySelector('.car-capacity span').textContent;
    const price = carCard.querySelector('.price-value').textContent;
    const description = carCard.querySelector('.car-description').textContent;
    
    const modal = document.createElement('div');
    modal.className = 'car-detail-modal';
    modal.innerHTML = `
        <div class="modal-overlay" onclick="closeModal()"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2>${carName}</h2>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="car-detail-info">
                    <div class="detail-price">
                        <strong>Harga: ${price}/hari</strong>
                    </div>
                    <div class="detail-capacity">
                        <i class="fas fa-users"></i>
                        <span>${capacity}</span>
                    </div>
                    <div class="detail-description">
                        <p>${description}</p>
                    </div>
                    
                    <h3>Spesifikasi & Fasilitas</h3>
                    <div class="spec-grid">
                        <div class="spec-item">
                            <i class="fas fa-snowflake"></i>
                            <span>AC Dingin</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-music"></i>
                            <span>Audio System</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-gas-pump"></i>
                            <span>BBM Irit</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Asuransi Included</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-tools"></i>
                            <span>Maintenance Terjamin</span>
                        </div>
                        <div class="spec-item">
                            <i class="fas fa-headset"></i>
                            <span>24/7 Support</span>
                        </div>
                    </div>
                    
                    <div class="rental-terms">
                        <h4>Syarat Rental:</h4>
                        <ul>
                            <li>SIM A yang masih berlaku</li>
                            <li>KTP/Identitas yang valid</li>
                            <li>Deposit sesuai ketentuan</li>
                            <li>Usia minimal 21 tahun</li>
                        </ul>
                    </div>
                    
                    <div class="modal-actions">
                        <button class="btn-primary" onclick="showBookingModalFromDetail('${carName}', '${price}')">
                            Booking Sekarang
                        </button>
                        <button class="btn-secondary" onclick="contactWhatsApp('${carName}', '${price}')">
                            Tanya via WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    document.body.style.overflow = 'hidden';
    
    // Animate modal in
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);
}

// Show booking modal function
function showBookingModal(carName, carPrice, carCard = null) {
    const capacity = carCard ? carCard.querySelector('.car-capacity span').textContent : '';
    
    const modal = document.createElement('div');
    modal.className = 'booking-modal';
    modal.innerHTML = `
        <div class="modal-overlay" onclick="closeModal()"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2>Booking ${carName}</h2>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="booking-summary">
                    <h3>Detail Booking</h3>
                    <div class="summary-item">
                        <span>Kendaraan:</span>
                        <strong>${carName}</strong>
                    </div>
                    <div class="summary-item">
                        <span>Kapasitas:</span>
                        <strong>${capacity}</strong>
                    </div>
                    <div class="summary-item">
                        <span>Harga:</span>
                        <strong>${carPrice}/hari</strong>
                    </div>
                </div>
                
                <form id="booking-form">
                    <div class="form-group">
                        <label for="customer-name">Nama Lengkap *</label>
                        <input type="text" id="customer-name" required>
                    </div>
                    <div class="form-group">
                        <label for="customer-phone">Nomor WhatsApp *</label>
                        <input type="tel" id="customer-phone" required>
                    </div>
                    <div class="form-group">
                        <label for="pickup-date">Tanggal Ambil *</label>
                        <input type="date" id="pickup-date" required>
                    </div>
                    <div class="form-group">
                        <label for="return-date">Tanggal Kembali *</label>
                        <input type="date" id="return-date" required>
                    </div>
                    <div class="form-group">
                        <label for="pickup-location">Lokasi Ambil</label>
                        <select id="pickup-location">
                            <option value="kantor">Kantor Kami</option>
                            <option value="antar">Antar ke Lokasi (+ biaya)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="driver-option">Opsi Driver</label>
                        <select id="driver-option">
                            <option value="tanpa-driver">Tanpa Driver</option>
                            <option value="dengan-driver">Dengan Driver (+ biaya)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="notes">Catatan Tambahan</label>
                        <textarea id="notes" rows="3" placeholder="Tuliskan permintaan khusus atau catatan..."></textarea>
                    </div>
                    
                    <div class="total-calculation">
                        <div class="calc-item">
                            <span>Durasi:</span>
                            <span id="duration">0 hari</span>
                        </div>
                        <div class="calc-item">
                            <span>Subtotal:</span>
                            <span id="subtotal">Rp 0</span>
                        </div>
                        <div class="calc-item total">
                            <span><strong>Total Estimasi:</strong></span>
                            <span id="total"><strong>Rp 0</strong></span>
                        </div>
                    </div>
                    
                    <div class="modal-actions">
                        <button type="submit" class="btn-primary">Konfirmasi Booking</button>
                        <button type="button" class="btn-secondary" onclick="closeModal()">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    document.body.style.overflow = 'hidden';
    
    // Handle form submission
    const form = document.getElementById('booking-form');
    const pickupDate = document.getElementById('pickup-date');
    const returnDate = document.getElementById('return-date');
    
    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    pickupDate.min = today;
    returnDate.min = today;
    
    // Calculate duration and total when dates change
    [pickupDate, returnDate].forEach(input => {
        input.addEventListener('change', calculateTotal);
    });
    
    function calculateTotal() {
        const pickup = new Date(pickupDate.value);
        const returnD = new Date(returnDate.value);
        
        if (pickup && returnD && returnD > pickup) {
            const duration = Math.ceil((returnD - pickup) / (1000 * 60 * 60 * 24));
            const basePrice = parseInt(carPrice.replace(/\D/g, ''));
            const subtotal = duration * basePrice;
            
            document.getElementById('duration').textContent = `${duration} hari`;
            document.getElementById('subtotal').textContent = formatCurrency(subtotal);
            document.getElementById('total').textContent = formatCurrency(subtotal);
        }
    }
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('customer-name').value,
            phone: document.getElementById('customer-phone').value,
            pickupDate: document.getElementById('pickup-date').value,
            returnDate: document.getElementById('return-date').value,
            pickupLocation: document.getElementById('pickup-location').value,
            driverOption: document.getElementById('driver-option').value,
            notes: document.getElementById('notes').value,
            car: carName,
            price: carPrice,
            total: document.getElementById('total').textContent
        };
        
        sendBookingToWhatsApp(formData);
    });
    
    // Animate modal in
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);
}

// Send booking to WhatsApp
function sendBookingToWhatsApp(data) {
    const phoneNumber = '6281234567890'; // Replace with actual number
    const message = `🚗 *BOOKING RENTAL MOBIL*

📋 *Detail Booking:*
• Nama: ${data.name}
• Kendaraan: ${data.car}
• Tanggal Ambil: ${data.pickupDate}
• Tanggal Kembali: ${data.returnDate}
• Lokasi Ambil: ${data.pickupLocation}
• Driver: ${data.driverOption}
• Total Estimasi: ${data.total}

📞 Kontak: ${data.phone}

${data.notes ? `📝 Catatan: ${data.notes}` : ''}

Mohon konfirmasi ketersediaan dan detail pembayaran. Terima kasih!`;

    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    
    window.open(whatsappUrl, '_blank');
    closeModal();
}

// Show promo booking modal
function showPromoBookingModal(promoPrice, capacity, promoCard) {
    const description = promoCard.querySelector('.promo-description').textContent;
    const promoType = promoCard.querySelector('.promo-label').textContent;
    
    showBookingModal(`Promo ${promoType}`, promoPrice, {
        querySelector: () => ({ textContent: capacity })
    });
}

// Contact via WhatsApp
function contactWhatsApp(carName, carPrice) {
    const phoneNumber = '6281234567890';
    const message = `Halo, saya tertarik dengan rental ${carName} (${carPrice}/hari). Bisa minta informasi lebih lanjut?`;
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    
    window.open(whatsappUrl, '_blank');
    closeModal();
}

// Contact customer service
function contactCustomerService() {
    const phoneNumber = '6281234567890';
    const message = `Halo, saya butuh bantuan untuk memilih kendaraan rental. Bisa dibantu?`;
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    
    window.open(whatsappUrl, '_blank');
}

// Show terms and conditions
function showTermsAndConditions() {
    const modal = document.createElement('div');
    modal.className = 'terms-modal';
    modal.innerHTML = `
        <div class="modal-overlay" onclick="closeModal()"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2>Syarat & Ketentuan Rental</h2>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="terms-content">
                    <h3>Persyaratan Penyewa</h3>
                    <ul>
                        <li>Usia minimal 21 tahun dan maksimal 65 tahun</li>
                        <li>Memiliki SIM A yang masih berlaku</li>
                        <li>Menyerahkan fotocopy KTP dan SIM</li>
                        <li>Membayar deposit sesuai ketentuan</li>
                    </ul>
                    
                    <h3>Ketentuan Rental</h3>
                    <ul>
                        <li>Pembayaran dapat dilakukan tunai atau transfer</li>
                        <li>DP minimal 30% dari total biaya rental</li>
                        <li>Kendaraan harus dikembalikan dengan kondisi bersih</li>
                        <li>Bahan bakar ditanggung penyewa</li>
                        <li>Toleransi keterlambatan maksimal 3 jam</li>
                    </ul>
                    
                    <h3>Larangan</h3>
                    <ul>
                        <li>Tidak boleh dibawa ke luar kota tanpa izin</li>
                        <li>Dilarang merokok di dalam kendaraan</li>
                        <li>Tidak boleh digunakan untuk balapan liar</li>
                        <li>Dilarang membawa barang ilegal</li>
                    </ul>
                    
                    <h3>Denda & Sanksi</h3>
                    <ul>
                        <li>Keterlambatan: Rp 50.000/jam</li>
                        <li>Kehilangan kunci: Rp 500.000</li>
                        <li>Kerusakan ringan: Sesuai bengkel rekanan</li>
                        <li>Kerusakan berat: Sesuai asuransi</li>
                    </ul>
                </div>
                <div class="modal-actions">
                    <button class="btn-primary" onclick="closeModal()">Mengerti</button>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    document.body.style.overflow = 'hidden';
    
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);
}

// Close modal function
function closeModal() {
    const modals = document.querySelectorAll('.car-detail-modal, .booking-modal, .terms-modal');
    modals.forEach(modal => {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.remove();
            document.body.style.overflow = 'auto';
        }, 300);
    });
}

// Helper functions
function showBookingModalFromDetail(carName, carPrice) {
    closeModal();
    setTimeout(() => {
        showBookingModal(carName, carPrice);
    }, 300);
}

// Initialize lazy loading
function initializeLazyLoading() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.src || img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    }
}

// Initialize search functionality
function initializeSearch() {
    const filterControls = document.querySelector('.filter-controls');
    if (filterControls && !document.getElementById('search-input')) {
        const searchGroup = document.createElement('div');
        searchGroup.className = 'filter-group';
        searchGroup.innerHTML = `
            <label for="search-input">Cari Kendaraan:</label>
            <input type="text" id="search-input" class="filter-select" placeholder="Masukkan nama mobil...">
        `;
        filterControls.appendChild(searchGroup);
        
        const searchInput = document.getElementById('search-input');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const carCards = document.querySelectorAll('.car-card');
            let visibleCount = 0;
            
            carCards.forEach(card => {
                const carName = card.querySelector('.car-name').textContent.toLowerCase();
                const shouldShow = carName.includes(searchTerm);
                
                if (shouldShow) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });
            
            showNoResultsMessage(visibleCount === 0 && searchTerm !== '');
        });
    }
}

// Show no results message
function showNoResultsMessage(show) {
    let noResultsMsg = document.querySelector('.no-results-message');
    
    if (show && !noResultsMsg) {
        noResultsMsg = document.createElement('div');
        noResultsMsg.className = 'no-results-message';
        noResultsMsg.innerHTML = `
            <div style="text-align: center; padding: 3rem; color: #7f8c8d;">
                <div style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.5;">🔍</div>
                <h3>Tidak ada kendaraan yang ditemukan</h3>
                <p>Coba ubah filter pencarian Anda</p>
                <button onclick="resetFilters()" class="btn-primary" style="margin-top: 1rem;">
                    Reset Filter
                </button>
            </div>
        `;
        document.querySelector('.car-grid').appendChild(noResultsMsg);
    } else if (!show && noResultsMsg) {
        noResultsMsg.remove();
    }
}

// Utility function to format currency
function formatCurrency(amount) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(amount);
}

// Add modal styles dynamically
function addModalStyles() {
    if (document.getElementById('modal-styles')) return;
    
    const style = document.createElement('style');
    style.id = 'modal-styles';
    style.textContent = `
        .car-detail-modal,
        .booking-modal,
        .terms-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .car-detail-modal.show,
        .booking-modal.show,
        .terms-modal.show {
            opacity: 1;
            visibility: visible;
        }
        
        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }
        
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            background: white;
            border-radius: 15px;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            transition: transform 0.3s ease;
        }
        
        .car-detail-modal.show .modal-content,
        .booking-modal.show .modal-content,
        .terms-modal.show .modal-content {
            transform: translate(-50%, -50%) scale(1);
        }
        
        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f8f9fa;
            border-radius: 15px 15px 0 0;
        }
        
        .modal-header h2 {
            margin: 0;
            color: #2c3e50;
        }
        
        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #7f8c8d;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .modal-close:hover {
            color: #e74c3c;
            background: #f8f9fa;
        }
        
        .modal-body {
            padding: 2rem 1.5rem;
        }
        
        .detail-price {
            font-size: 1.3rem;
            color: #e74c3c;
            margin-bottom: 1rem;
        }
        
        .detail-capacity {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #3498db;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .detail-description {
            margin-bottom: 2rem;
            line-height: 1.6;
            color: #555;
        }
        
        .spec-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin: 1rem 0 2rem 0;
        }
        
        .spec-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.8rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .spec-item i {
            color: #3498db;
            width: 20px;
        }
        
        .rental-terms {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1.5rem 0;
        }
        
        .rental-terms h4 {
            margin-bottom: 1rem;
            color: #2c3e50;
        }
        
        .rental-terms ul {
            margin: 0;
            padding-left: 1.2rem;
        }
        
        .rental-terms li {
            margin-bottom: 0.5rem;
            color: #555;
        }
        
        .booking-summary {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }
        
        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.8rem;
        }
        
        .form-group {
            margin-bottom: 1.2rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
        }
        
        .total-calculation {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin: 2rem 0;
            border: 2px solid #e9ecef;
        }
        
        .calc-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.8rem;
        }
        
        .calc-item.total {
            border-top: 2px solid #ddd;
            padding-top: 0.8rem;
            font-size: 1.1rem;
        }
        
        .terms-content {
            line-height: 1.6;
        }
        
        .terms-content h3 {
            color: #2c3e50;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        
        .terms-content h3:first-child {
            margin-top: 0;
        }
        
        .terms-content ul {
            margin-bottom: 1.5rem;
            padding-left: 1.2rem;
        }
        
        .terms-content li {
            margin-bottom: 0.5rem;
            color: #555;
        }
        
        .modal-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .modal-actions button {
            flex: 1;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        @media (max-width: 768px) {
            .modal-content {
                width: 95%;
                max-height: 95vh;
            }
            
            .modal-header,
            .modal-body {
                padding: 1rem;
            }
            
            .spec-grid {
                grid-template-columns: 1fr;
            }
            
            .modal-actions {
                flex-direction: column;
            }
        }
    `;
    
    document.head.appendChild(style);
}

// Initialize modal styles
addModalStyles();

// Add fade in animation keyframes
const fadeInUpKeyframes = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;

if (!document.getElementById('fade-in-up-keyframes')) {
    const style = document.createElement('style');
    style.id = 'fade-in-up-keyframes';
    style.textContent = fadeInUpKeyframes;
    document.head.appendChild(style);
}