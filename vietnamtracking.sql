-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2020 lúc 05:28 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vietnamtracking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brief` text NOT NULL,
  `descr` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `brief`, `descr`, `date`) VALUES
(1, 'news/news1.jpg', 'COVID-19 brings more business to insurer', 'People wait in front of the social insurance agency in Ba Đình District to register for a voluntary health card. The number of people who buy insurance increases as the pandemic of COVID-19 spreads', 'People wait in front of the social insurance agency in Ba Đình District to register for a voluntary health card. The number of people who buy insurance increases as the pandemic of COVID-19 spreads — Photo Minh HươngBy Minh HươngHÀ NỘI — The COVID-19 pandemic has so far hurt many businesses in the country, except the insurance industry.On Friday Việt Nam confirmed 91 positive cases of coronavirus infection and isolated about 42,000 people for health monitoring since March 20. A month before that local insurers have started to provide services insurance related to coronavirus.Speaking with Việt Nam News, Nguyễn Minh Ngọc, an employee from Manulife Insurance Firm said: \'Normally, I have most deals signed at the end of the year. This time, I have signed more and more deals in the first quarter due to COVID-19.\'The pandemic had increased demand for insurance products, said Ngọc.Initial data showed the outbreak had increased local demand for insurance by around 40 per cent.Coronavirus packages A week before the 17th positive case was announced on March 6, insurance firm FWD had introduced a package called \'FWD Coronavirus Insurance and hospital assistance\'.According to the insurance firm, the coronavirus insurance doesn’t cover for cancer, heart attacks, diabetes, hepatitis, stomach ulcers, hypertension, arthritis, and mental illness, but it does pay out for those testing positive for COVID-19, with a total amount of VNĐ20 million or a maximum compensation of VNĐ100 million to VNĐ300 million in case of death caused by the virus.As a local insurer, PVI also announced two packages related to the virus at a cost of VNĐ195,000 and VNĐ330,000 per year, respectively. LIAN, from Viễn Đông Insurance Joint Stock Company (VASS), also offers its customers a similar package at VNĐ200,000.Joining the coronavirus-shields, there were non-life insurers like Saigon- Hanoi Insurance Corporation (BSH), Military Insurance Corporation (MIC), VietinBank (VBI) as well as life insurers of Manulife Vietnam Insurance, Prudential and Chubb Life Unlike other insurance products, Corona Shield by VietinBank Insurance (VBI) has a term of only three months. However, the participation fee is also cheaper with three packages worth VNĐ33,000, VNĐ66,000 and VNĐ99,000, respectively.The customer or beneficiary will receive the sum insured in case of a COVID-19 positive result or death. The level of treatment allowances in hospitals may be up to VNĐ3 million and the payment for deaths due to epidemics may be up to VNĐ150 million.In addition, customers who buy Corona Shield at risk of death from traffic accidents are also covered by the company.Đỗ Duy Long, from Thanh Xuân District, Hà Nội said: “I just bought a Lian insurance product for each member of my family.” “Paying VNĐ200,000 for protection in such a case is reasonable and economical,” Long said mentioning the quick spread of the pandemic in China, Italy and South Korea and other places in the world.Ngọc, the Manulife insurance employee, told Việt Nam News: “It normally takes a lot of time to advise customers to buy products. Sometimes, it takes a year. But in the case of the virus, most of the customers decide very quickly. They do not only buy for themselves and their family but also suggest others to buy them.”According to Sài Gòn Securities Inc, the pandemic could cause compensation costs to rise moderately because most medical expenses will be covered by social insurance. \'The actual compensation payment may occur 1-2 months after the incident, so this impact will not show much in this quarter,\' SSI said. Data from the General Statistics Office, the insurance premium revenue of the whole market increased by 20.3 per cent higher than 2018 of which life insurance premiums increased by 25.1 per cent and non-life insurance increased by 11.6 per cent.', '2020-06-12'),
(3, 'news/news3.jpg', 'Vietnamese footballers help prevent COVID-19 pandemics', 'Striker Nguyễn Văn Toàn (right) among the footballers helping to prevent  COVID-19 epidemic in the country.', 'Striker Nguyễn Văn Toàn (right) among the footballers helping to prevent  COVID-19 epidemic in the country. — Photo zing.vnHÀ NỘI — A number of professional footballers have donated cash to help the country fight COVID-19.National striker Nguyễn Văn Toàn is leading the campaign and has helped collect VNĐ120 million (US$5,200).The Hoàng Anh Gia Lai player revealed the generosity of himself and other footballers on social media.Hồ Chí Minh City star Nguyễn Công Phượng has also donated, along with Trần Đình Trọng, Nguyễn Duy Mạnh, Đỗ Hùng Dũng, Phạm Đức Huy and Trần Văn Kiên of Hà Nội  FC.The players were responded to a call from Prime Minister Nguyễn Xuân Phúc and the Central Committee of the Việt Nam Fatherland Front to help the cause.\'A little effort to push back corona, Việt Nam win,\' midfielder Trọng wrote on social media.\'We can do it,\' added DũngOn Sunday, Toàn will add up all the money raised and send to the National Steering Committee for COVID-19 epidemic Prevention and Control headed by Deputy Prime Minister Vũ Đức Đam.news/news4.jpgA number of other professional players have also taken to social media to help fight the pandemic. news/news5.jpgMidfielder Lương Xuân Trường calls fans to stay at home as much as possible, wear a mask and wash their hands. — Photo zing.vnMidfielder Lương Xuân Trường also called fans to stay at home as much as possible; use a mask and wash their hands as well as avoiding putting your hands on your face, avoiding shaking hands, stay away from crowded places and declare honest health conditions.\'Let\'s fight with the disease together,\' said Trường.', '2020-06-12'),
(4, 'news/news6.jpg', 'HDBank joins fight against Covid-19', 'HDBank contributes VNĐ10 billion to support the fight against the Covid-19 pandemic.', 'HDBank contributes VNĐ10 billion to support the fight against the Covid-19 pandemic. — Photo courtesy of HDBank\r\nHCM CITY — Fifteen banks and a finance company have donated VNĐ140 billion (US$8.5 million) to support the fight against the Covid-19 pandemic and help people suffering from drought and saltwater intrusion in rivers around the country.\r\n\r\nThe money was handed over at a ceremony held at the Central Committee of the Vietnam Fatherland Front in Hà Nội on March 17 in the presence of Prime Minister Nguyễn Xuân Phúc, ministers, heads of government agencies, and the State Bank of Việt Nam chief.\r\n\r\nThis was in response to Phúc’s plea to all citizens to donate to the Covid-19 control efforts.\r\n\r\nTwelve banks, BIDV, Vietcombank, VietinBank, Agribank, MB, Techcombank, HDBank, VPBank, Sacombank, MSB, VIB, and ACB, donated VNĐ10 billion ($610,335) each, and three others, SeABank, Bắc Á and TPBank, and the finance company donated VNĐ5 billion each.\r\n\r\nSince the Governor of the State Bank of Vietnam issued Document No. 541 / NHNN-TD on measures to support businesses in overcoming the adverse impacts of the pandemic, HDBank has been actively supporting its customers.\r\n\r\nIt announced a support package of VNĐ5 trillion ($306.06 million) at an interest rate of just 6.5 per cent for small and medium-sized enterprises.\r\n\r\nIt has also set aside VNĐ3 trillion to support enterprises that supply drugs and medical equipment to enable them to meet demand and stabilise prices.  As part of this, besides providing loans at preferential rates, the bank has also cut the fees for international payments, using domestic current accounts and issuing guarantees by 50-100 per cent.\r\n\r\nIt also has a VNĐ1 trillion package to support the Lộc Trời agricultural supply chain to ensure production and supply of rice to the country and help businesses facing difficulties due to saltwater intrusion in the Mekong Delta.\r\n\r\nBesides, the bank offers preferential credit to customers affected by the Covid-19 pandemic throughout the country at interest rates that are 2-4.5 per cent lower than normal.\r\n\r\nIt plans to set aside VNĐ10 trillion to lend to producers and corporates who supply goods and services to supermarkets such as Saigon Co.op and Masan at interest rates starting at 6.5 per cent per year.\r\n\r\nIt has bought Corona Guard insurance for its employees.\r\n\r\nAt its transaction office nation-wide, all employees wear face masks and wash hands, and the workplace is regularly disinfected. Customers are provided free face masks and hand sanitisers.\r\n\r\nThis year 2020 HDBank has donated health insurance cards to thousands of people in the Mekong Delta, which is facing difficulties from drought and salinity and lack of sanitation.\r\n\r\nFor years, around the country but especially in the Mekong Delta, the lender has built bridges and roads, given scholarships to disadvantaged students, funded eye surgeries for hundreds of poor people, and donated insurance cards to more than 25,000 poor people throughout its \'Wings of love\' programme that seeks to share community responsibility.', '2020-06-04'),
(5, 'news/news7.jpg', 'Central region launches new tourism promotions as arrivals fall due to COVID-19', 'Hội An has seen a drop in tourist arrivals due to the COVID-19 outbreak.', 'Hội An has seen a drop in tourist arrivals due to the COVID-19 outbreak. Photo from vietnamtourism.gov.vn\r\nCENTRAL REGION The Central provinces are working on new promotions to revive the tourism industry which has been hit by the novel corona virus COVID-19 outbreak.\r\n\r\nCao Trí Dũng, chairman of the Đà Nẵng Tourism Association, said: “The city will collaborate with Quảng Nam and Thừa Thiên-Huế provinces to launch a promotion programme in March to pull visitors back to the Central region.”\r\n\r\nHe said that hundreds of tourism agencies in the region had agreed to take part in the programme, which focuses on improving service quality and creating new tourism products.\r\n\r\nThe associations have asked local authorities to provide tax exemptions to tourism agencies to help reduce their losses.\r\n\r\nAccording to the Đà Nẵng Tourism Department, from March to May, the city will open new direct flights to Laos, Russia and India, which are considered markets with high potential.\r\n\r\nDue to the current global epidemic, the number of arrivals to Đà Nẵng has fallen by 50 per cent, mostly tourists from Asian countries.\r\n\r\nQuảng Nam Province is facing challenges because the number of visitors, particularly foreigners, is expected to drop significantly this month.\r\n\r\nNguyễn Văn Sơn, deputy chairman of the People’s Committee of Hội An City, said: “The deep fall in tourist arrivals in Hội An has caused losses to accommodation businesses, service providers and tourism agencies.”\r\n\r\nDũng of the Đà Nẵng Tourism Association said: “Although the situation is getting worse, central provinces are planning tourism promotions to attract visitors when the Covid-19 epidemic ends.”\r\n\r\nKhánh Hòa Province is focusing on the markets of Europe, Middle East, Southeast Asia and India.\r\n\r\nHoàng Văn Vĩnh, chairman of the province’s Tourism Association, said: “The association is working with the provincial Tourism Department to seek new markets.”\r\n\r\nBeaches and attractions in the province have re-opened to welcome visitors after temporary closure due to the desease.\r\n\r\nVĩnh said: “The Central region is a safe destination. One person in this region was infected with COVID-19, but was discharged from the hospital on February 4.”', '2020-06-05'),
(6, 'news/news8.png', 'Six million masks to be made in February', 'Workers making masks at a VINATEX workshop in Hà Nội', 'Workers making masks at a VINATEX workshop in Hà Nội. — VNA PhotoHÀ NỘI — Textile manufacturers are ramping up production of masks to combat the spread of novel coronavirus (COVID-19), according to the Vietnam National Textile and Garment Group (VINATEX).The group set a target to make 5.5-6 million masks by the end of February, while maintaining a steady supply of 10 tonnes of anti-bacterial cotton for medical mask makers across the country, enough to produce up to three million masks daily.The group said its members have shifted to mask production after the virus outbreak in China. It has made promises that masks will be produced following strict quality-control standards and sold at no more than what it costs to make them.Medical facilities, schools, airlines and the army will be prioritised in receiving mask supplies. Only ten per cent of the group’s production will be sold directly at selected venues at a maximum of five masks per person per day.The group said some of its companies are setting up dedicated operations for mask making and output could still be improved to 12 million masks a month by March.', '2020-06-12'),
(7, 'news/news9.jpg', 'Prime Minister reveals plans to fight the deadly coronavirus', 'Prime Minister Nguyễn Xuân Phúc has instructed a number of ministries to act fast to prevent the spread of the deadly coronavirus.', 'Prime Minister Nguyễn Xuân Phúc has instructed a number of ministries to act fast to prevent the spread of the deadly coronavirus. Photo baochinhphu.vn\r\nHA NOI – Viet Nam is setting up a rapid response team to fight the deadly coronavirus that is sweeping the world.\r\n\r\nThe announcement was made by Prime Minister Nguyễn Xuân Phúc on Tuesday as he instructed the Ministry of Health to provide daily updates regarding the epidemic.\r\n\r\nMany other ministries have been told to play their part to ensure the virus causing minimum problems in Viet Nam.\r\n\r\nThe Directive No05 requires ministries, branches and localities to strictly implement the Law on Exit and Entry of Vietnamese citizens, the Law on Medical Examination and Treatment, the Law on Prevention and Control of Infectious Diseases, and the ban on importing wildlife into the country.\r\n\r\nThe PM told the Ministry of Health to direct and guide localities and units to strictly supervise and detect cases early, especially those entering the country from infected areas.\r\n\r\nMore than 100 people have died since the virus was first detected in Wuhan, China.\r\n\r\nTwo cases, father and son from Wuhan, have been reported in Vietnam. Both are being treated in hospital in HCM City.\r\n\r\nThe pair have been identified as Li Ding, 66, and 28-year-old Li Zichao. They were admitted to hospital on Wednesday suffering from for pneumonia and later tested positive for corona virus.\r\n\r\nThe Ministry of Health (MoH) said both patients were recovering in Chợ Rẫy Hospital. Li Zichao on Tuesday was given the all clear.\r\n\r\nWorldwide, the virus has spread to Thailand, Taiwan, Japan, Singapore, South Korea, Vietnam, the US, France, Australia, Malaysia, Nepal and Canada.. Flights between Viet Nam and Wuhan have been grounded for the foreseeable future.\r\n\r\nPM Phuc said Tuesday, the Ministry of Health must be prepared for all scenarios and come up with recommendations to prevent the spread of the disease.\r\n\r\nPhuc has also asked the Ministry of Culture, Sports and Tourism to direct tour companies to cancel trips from and to the provinces and cities infected with diseases. Chinese tourists already in Viet Nam are encouraged to restrict their movement.\r\n\r\nThe ministry must direct units to coordinate with local medical establishments to isolate tourists found to be infected with the virus.\r\n\r\nPM Phuc also asked the Ministry of Public Security to collaborate with the health sector to strictly supervise and strictly control epidemics at border gates.\r\n\r\nIt will focus on verifying and strictly handling cases of spreading false information about the epidemic situation.\r\n\r\nThe Ministry of National Defense has been asked to close trails connecting with China and control passersby at border gates.\r\n\r\nThe Ministry of Foreign Affairs must coordinate with the Ministry of Labour, War Invalids and Social Affairs in determining the number of Vietnamese citizens in the epidemic area to protect them when needed.\r\n\r\nThe Ministry of Labour, War Invalids and Social Affairs must closely monitor the health status of labourers returning from epidemic areas in China.\r\n\r\nHe has also required the Ministry of Information and Communications to direct local media to publish accurate and timely reports and measures for people to prevent and fight the epidemic.\r\n\r\nThe Ministry of Education and Training must inform students studying abroad to stay away from affected areas. The Ministry of Finance must ensure adequate funding for epidemic prevention and control when necessary.\r\nnews/news10.jpg\r\nTourists at a Vinpearl resort pass through a hygiene station to help fight the spread of the deadly coronavirus. Photo tienphong.vn\r\nFrom January 22, Vinpearl & Vinpearl Land Nha Trang has implemented a number of measure to ensure Hon Tre Island in Nha Trang City is a safe destination for visitors to enjoy the lunar New Year.\r\n\r\nThese include installing antiseptic hygiene points across the island, supplying health information to all visitors, and ensure medical staff are on-hand to support all visitors.', '2020-06-07'),
(8, 'news/news11.jpg', 'Coronavirus cases reported in HCM City', 'Two Chinese patients are undergoing treatment inside the quarantined area.\r\nHCM CITY — Two Chinese visitors are in hospital in HCM City infected with coronavirus.', 'Two Chinese patients are undergoing treatment inside the quarantined area. — Photo thanhnien.vn\r\nHCM CITY — Two Chinese visitors are in hospital in HCM City infected with coronavirus.\r\n\r\nThe pair have been identified as father and son, Li Ding, 66, and 28-year-old Li Zichao.\r\n\r\nThey were admitted to hospital on Wednesday suffering from for pneumonia and later tested positive for corona virus.\r\n\r\nAccording to initial findings, they travelled from Wuhan, China to Hà Nội on January 13 and stayed till January 16.\r\n\r\nOn January 17, they flew to Khánh Hoà Province’s Nha Trang City and left to HCM City on January 19. On January 20, they visited Long An Province.\r\n\r\nThe Ministry of Health (MoH) said both patients are recovering in Chợ Rẫy Hospital.\r\n\r\nMeanwhile Prime Minister Nguyễn Xuân Phúc issued an urgent message asking the MoH and related agencies to pull out all the stops to prevent the virus, tighten management over immigration at border gates and report suspected cases to medical facilities to control the disease.\r\n\r\nHà Nội also reported two suspected cases on Thursday, including an overseas Vietnamese student coming back from Wuhan and a trader at a Việt Nam-China border market.\r\n\r\nThe two patients were admitted to Hospital for Tropical Diseases in Đông Anh District, suffering fever and sore throats. \r\n\r\nThey are being quarantined pending test results from the National Institute of Hygiene and Epidemiology.\r\n\r\nThe coronavirus can spread among people through the respiratory tract, just like Severe Acute Respiratory Syndrome (SARS) which killed some 650 people in mainland China and Hong Kong in 2002 and 2003.\r\n\r\nThe first case was reported on December 31, 2019. Japan, China’s Taiwan, Macau, Thailand and the US have also announced infected cases.\r\n\r\nThe death toll rose to 17 by Thursday with hundreds of others were testing positive for the virus.\r\n\r\nChina imposed quarantine over Wuhan City on Thursday, halting all outward flights and trains. ', '2020-06-08'),
(9, 'news/news12.jpg', 'Japan offers testing reagents aids amid fears of new cases', 'A doctor of Bạch Mai Hospital\'s mobile force examines a patient infected with the nCoV virus in Bình Xuyên District Medical Station, VĨnh Phúc Province.', 'A doctor of Bạch Mai Hospital\'s mobile force examines a patient infected with the nCoV virus in Bình Xuyên District Medical Station, VĨnh Phúc Province. VNA/VNS Photo\r\n \r\n\r\nHÀ NỘI - Deputy health minister Đỗ Xuân Tuyên on Friday warned the number of the coronavirus infections in Vĩnh Phúc Province – the biggest cluster detected in Việt Nam so far – was likely to increase in the coming days.\r\n\r\nVĩnh Phúc, about 40km to the north of Hà Nội, on Thursday reported another two people infected, raising the total cases in the province to seven out of 13 nationwide.\r\n\r\nAccording to the Ministry of Health, four patients in Vĩnh Phúc had travelled to Wuhan for a training course in November last year and returned to Việt Nam mid-January. One of them passed the virus to three family members.\r\n\r\nTuyên said those infected had moved around the area and made contacts with several people. Eighteen people who were identified as having close contact are being supervised closely and put under quarantine, he added.\r\n\r\n“Vĩnh Phúc is currently the epicentre of the epidemic,” he said.\r\n\r\n“All levels of authorities need to stay focussed and support Vĩnh Phúc to set up and maintain quarantine zones as we’re determined to not let the virus spread and result in fatalities.”\r\n\r\nReopen schools\r\n\r\nViệt Nam Red Cross vice president, Dr Trần Quốc Hùng on Friday said schools should be reopened under supervision of local authorities as the young children are less likely to be infected.\r\n\r\nCiting medical research of Chinese scientists, he said the average age of patients in Wuhan was relatively old, with most of them were between 55 and 95 years old.\r\n\r\nOnly 10 per cent of those infected were 39 years and younger, while up to 50 per cent had pre-existing medical conditions, Hùng said.\r\n\r\nIn Việt Nam, the average age of those infected was 36, with the youngest at 16 and the oldest at 73, according to Hùng.\r\n\r\nHe also said that Việt Nam so far detected only a small number of infections in a few localities. \r\n\r\nGiven that the youngsters, especially those under 12, were unlikely to catch the virus, schools should open again particularly in localities that were yet to discover any infected cases, he said.\r\n\r\nHe added that those in the south should also consider letting the students back to class as soon as possible as the corona virus was found to be active in low temperatures and high humidity – the current weather conditions in the north – and much less active in hot and dry conditions like in the south, Hùng said.\r\n\r\nWhile recommending reopening schools, Hùng also advised to clean and disinfect all classrooms and immediately close schools again if there were new infections in the locality. Classes should also be cancelled if temperatures drop to below 15 degrees Celsius instead of the current benchmark of 10 degrees Celsius.\r\n\r\nTuyên said local people’s committees should consult with health and education departments to decide whether to extend the school closures.\r\n\r\n“All schools in three infected provinces, however, will remain closed in the meantime,” he said.\r\n\r\nSixty-three localities in Việt Nam universally closed all kindergartens, schools and universities for between two and seven days this week in response to the outbreak.\r\n\r\nHCM City on Thursday decided to extend the school closure for another week while Hà Nội Department of Education and Training was seeking a similar move.', '2020-06-09'),
(10, 'news/news13.jpg', 'Passengers from China asked to fill out health declaration forms, as Wuhan flights grounded', 'A customs official checks body temperature of passengers at Tân Sơn Nhất International Airport in HCM City.', 'A customs official checks body temperature of passengers at Tân Sơn Nhất International Airport in HCM City. — VNA/VNS Photo Đinh HằngHÀ NỘI — All travellers entering Việt Nam from China must fill out health declaration forms at the border gates from Saturday as part of efforts to prevent the spread of coronavirus.And flights between Việt Nam and Wuhan, China, the epicentre of the outbreak, have all been grounded.Health declaration forms will be distributed at all border gates and any visitor showing signs of the virus, such as coughing, shortness of breath or respiratory tract inflammation, will be isolated and subjected to health checks.From January 23, the Civil Aviation Authority of Việt Nam cancelled all flights between Việt Nam and Wuhan, China.The authority also said it will not grant new flight licences to airlines on this route.The authority has mobilised staff to collaborate with medical inspectors to follow the passengers’ health at border gates.Health officials in HCM City on Thursday revealed two visitors from China were in hospital suspected of suffering from coronavirus.The pair have been identified as father and son, Li Ding, 66, and 28-year-old Li Zichao.They were admitted to hospital on Wednesday suffering from for pneumonia and later tested positive for corona virus.According to initial findings, they travelled from Wuhan, China to Hà Nội on January 13 and stayed till January 16.The Ministry of Health (MoH) said both patients are recovering in Chợ Rẫy Hospital.China has so far confirmed that 41 people have died and 1,287 people infected by the virus across the country.The Severe Acute Respiratory Syndrome (SARS)-like virus has spread across Asia and other countries including the US and France.In Asia, Thailand, Japan, South Korea, Taiwan, Macau, Hongkong, Singapore, Nepal and India confirmed the infected cases.Australia is the latest country in a growing list to be affected by the illness.France was the first European country to report the infection. On Friday, it confirmed the first three cases, with two patients being hospitalised in Paris and the other in the southwestern city of Bordeaux. Central city put on coronavirus alert A group of Chinese tourists from Wuhan visiting the central city, left Đà Nẵng for Nha Trang City after quarantine control by local authorities.No cases related to coronavirus has found in the city, despite the arrival of 218 tourists from Wuhan.Chairman of the city’s People’s Committee Huỳnh Đức Thơ revealed the information in a statement after an urgent meeting with agencies on January 24.Thơ also asked all agencies set up prevention and control on all passengers and tourists coming from Wuhan to Đà Nẵng.Vice Director of the city’s Health Department Nguyễn Tiên Hồng confirmed that all 218 tourists who came from Wuhan to Đà Nẵng on January 22-24, had shown no signs of illness during their stay.“We did all the best control measures before they left for Nha Trang at noon on January 24. The city sent warnings and information to authorities of Nha Trang about the group to ensure better control in Nha Trang,” Hồng said.He also said two Chinese tourists visiting from Wuhan on January 15 were tested, with one sent to hospital after showing signs of fever. A blood sample was then sent to a lab in Nha Trang, but results came back negative for coronavirus.The city’s health department also dismissed rumours the coronavirus had infected tourists in the city in previous days.Nguyễn Minh Sang, director of Hải Vân Cát travel agency in Đà Nẵng, said his company hosted four flights with 300 tourists from Wuhan to Đà Nẵng each week.Sang said his company had canceled already booked tours for 2,000 tourists from Wuhan to Đà Nẵng on Friday.The city’s health department, in co-operation with airport authority, has arranged an isolated area with staffs to watch the passengers’ health at border gates.Đà Nẵng hosted about 700,000 Chinese tourists in 2019.', '2020-06-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vietnam`
--

CREATE TABLE `vietnam` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cases` int(30) NOT NULL,
  `active` int(30) NOT NULL,
  `deaths` int(30) NOT NULL,
  `recovered` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vietnam`
--

INSERT INTO `vietnam` (`id`, `name`, `cases`, `active`, `deaths`, `recovered`) VALUES
(1, 'Hà Nội', 114, 0, 0, 114),
(2, 'Hồ Chí Minh', 60, 3, 0, 57),
(3, 'Vĩnh Phúc', 19, 0, 0, 19),
(4, 'Ninh Bình', 13, 0, 0, 13),
(5, 'Bình Thuận', 9, 0, 0, 9),
(6, 'Quảng Ninh', 8, 0, 0, 8),
(7, 'Đà Nẵng', 6, 0, 0, 6),
(8, 'Hà Tĩnh', 4, 0, 0, 4),
(9, 'Hà Nam', 4, 0, 0, 4),
(10, 'Bắc Giang', 4, 0, 0, 4),
(11, 'Đồng Tháp', 6, 1, 0, 5),
(12, 'Thanh Hoá', 3, 0, 0, 3),
(13, 'Tây Ninh', 4, 0, 0, 4),
(14, 'Bạc Liêu', 21, 0, 0, 21),
(15, 'Quảng Nam', 5, 2, 0, 3),
(16, 'Thái Bình', 30, 25, 0, 5),
(17, 'Cần Thơ', 2, 0, 0, 2),
(18, 'Lào Cai', 2, 0, 0, 2),
(19, 'Ninh Thuận', 2, 0, 0, 2),
(20, 'Thừa Thiên Huế', 2, 0, 0, 2),
(21, 'Trà Vinh', 2, 0, 0, 2),
(22, 'Thái Nguyên', 1, 0, 0, 1),
(23, 'Hưng Yen', 1, 0, 0, 1),
(24, 'Đồng Nai', 1, 0, 0, 1),
(25, 'Hà Giang', 1, 0, 0, 1),
(26, 'Hải Dương', 4, 1, 0, 3),
(27, 'Lai Châu', 1, 0, 0, 1),
(28, 'Khánh Hòa', 1, 0, 0, 1),
(29, 'Bến Tre', 1, 0, 0, 1),
(30, 'Bắc Ninh', 1, 0, 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vietnam`
--
ALTER TABLE `vietnam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `vietnam`
--
ALTER TABLE `vietnam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
