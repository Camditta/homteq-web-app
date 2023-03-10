DROP TABLE IF EXISTS Product;
CREATE TABLE Product (
    prodId INT AUTO_INCREMENT,
    prodName VARCHAR(200) NOT NULL,
    prodPicNameSmall VARCHAR(200) NOT NULL,
    prodPicNameLarge VARCHAR(200) NOT NULL,
    prodDescripShort VARCHAR(1000) ,
    prodDescripLong VARCHAR(2000) ,
    prodPrice DECIMAL(8,2) NOT NULL DEFAULT '0.00',
    prodQuantity INT NOT NULL DEFAULT '100',
    CONSTRAINT p_pid_pk PRIMARY KEY (prodId)
) ;

INSERT INTO Product
(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES
('RING Video Wired Doorbell', 'ring_doorbell_small.jpg', 'ring_doorbell_large.jpg',
'Small in cost, big on features, Video Doorbell Wired connects to your existing doorbell wiring for always-on power and protection when you need it most',
'Featuring 1080p HD Video, Live Video and Two-Way Talk, to let you see, hear and speak to whoever is at your door, from wherever you are. Never miss a detail ever again
as the RING Video Wired Doorbell is Waterproof and has fixings included. Easy installation guide included in the box. Gain 100% control of your house security
with the Ring App and is Alexa compatible. Best Smart Doorbell October 2021 by Which?',
59.00, 48);

INSERT INTO Product
(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES
('Philips Hue Starter Kit With White B22 Bulb', 'huesmall.jpg', 'huelarge.jpg',
'Introducing the Philips Hue Starter Kit the simplest way to get started with smart lighting.
Connect your new Philips Hue lights to the Bridge (included in this starter kit) and discover endless smart home possibilities',
'Start controlling your lights through your smartphone via the Philips Hue app and unlock a full range of smart lighting features! With our Philips Hue White range, experience comfortable,
soft white light in your room with fully dimmable smart lighting control.
Discover Philips Hue - the latest in smart home lighting! What\'s Required? Everything you need is included in this starter kit. Simply connect your Bridge to your router,
screw in your new Philips Hue lights and take advantage of smart home lighting via the Philips Hue app.
Designed for Full Rooms: With a brightness 1100 lumen, these smart LED bulbs provide the perfect amount of light to fill areas of your living room or kitchen, especially when placed in pendant fixtures.
Control Lights With Your Voice - Works with Alexa, Google Assistant and Apple HomeKit devices for hands-free voice control. Control your smart home lights with simple voice commands!
Set The Right Mood With Soft White Light: Hue bulbs and light fixtures use a soft white light. Dimmable from bright daylight to low nightlights,
these smart lights allow you to fill your home with just the right
level of warm light when you need it.',
69.99, 56);

INSERT INTO Product
(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES
('Google Nest Audio Smart Speaker - Charcoal', 'google_speaker_small.jpg', 'google_speaker_large.jpg',
'Meet Google Nest Audio. Hear music the way that it should sound, 
with crisp vocals and powerful bass that fill the room. Just say, 
Hey Google to play music or ask about the weather, news or almost anything. 
And create a home audio system with your other Nest speakers, just like that',
'Listen in stereo sound or all over the house with your other Nest speakers. Nest Audio is designed to fit right into your home. And it looks as amazing as it sounds.
It\'s all about sound. Play music, and crisp vocals and powerful bass fill the room. Nest Audio is 75% louder than the original Google Home, with 50% stronger bass. Nest Audio adapts to your environment and whatever you\'re listening to, so that music sounds better. And news, podcasts and audiobooks sound even clearer.
Music here. Music there. Music everywhere. Create a home audio system and fill your home with sound. Listen to music in stereo sound, or hear it all over the house.
Huge help around the house. You can say things like, Hey Google, what\'s the weather going to be like this weekend? Ask Google about the news or sports scores. Hear your schedule. Make calls. And set timers and alarms. Even turn on the lights or turn up the heating. All with your voice.
Thoughtfully designed. Environmentally sound. Inspired by your home, Nest Audio\'s colours, size and shape fit beautifully into any room. It\'s also designed with the environment in mind. The enclosure is made from 70% recycled plastic.',
89.00, 84);

INSERT INTO Product
(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES
('Duux ThreeSixty Smart Heater - Grey', 'duuxheatersmall.jpg', 'duuxheaterlarge.jpg',
'Cozy up with Threesixty. This compact heater has a unique organic design and a capacity of 1,800 watt, making it much more powerful than you would expect',
'Thanks to the built-in fan, Threesixty accelerates the heating process in any room up to 30m, warming it up twice as fast as conventional heaters! And with the free Duux app, operating this heater is easy. With 3 heating settings and 2 ventilation settings (eco and boost), 
Threesixty is a diverse heater. The air outlet makes sure the heat is evenly distributed in 360 degrees.
Operating Threesixty is easy: use the buttons on the device or download the app to operate Threesixty from your favorite chair. With the app, you can set the temperature between 22-30C.',
100, 17);

INSERT INTO Product
(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES
('Roku Stick 4K HDR Streaming Stick Media Player', 'rokusticksmall.jpg', 'rokusticklarge.jpg',
'Start streaming in a snap and enjoy a massive selection of free, live, and paid channels, including free Emmy nominated Roku Originals on The Roku Channel',
'The sleek design hides neatly behind your TV with a simple setup. Plus, easily search across thousands of channels with your voice and control your TV, streaming, and sound all with the included remote.
Breathtaking picture quality stream in 4K, Dolby Vision , and HDR10+ with sharp resolution and vivid colour.
Voice remote power up your TV, adjust the volume, and control your streaming with one voice remote.
Hides behind your TV Plug it in, connect to the internet, and start streaming. It is that simple. A wide range of streaming platforms such as Netflix, Disney+, Youtube, Apple TV and many more.',
39.99, 98);

DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
    userId INT AUTO_INCREMENT,
    userType VARCHAR(1) NOT NULL,
    userFName VARCHAR(100) NOT NULL,
    userSName VARCHAR(100) NOT NULL,
    userAddress VARCHAR(200) NOT NULL,
    userPostCode VARCHAR(20) NOT NULL,
    userTelNo VARCHAR(20) NOT NULL,
    userEmail VARCHAR(100) NOT NULL UNIQUE,
    userPassword VARCHAR(100) NOT NULL,
    CONSTRAINT u_uid_pk PRIMARY KEY (userId)
) ;

INSERT INTO Users 
(userType, userFName, userSName, userAddress, userPostCode, userTelNo
, userEmail, userPassword) VALUES 
('C', 'Devon','Lockwood', '243 Pine Road', 'RM289E', '07523628827', 'devonlockwood@gmail.com',
'devon808');

INSERT INTO Users 
(userType, userFName, userSName, userAddress, userPostCode, userTelNo
, userEmail, userPassword) VALUES 
('A', 'Lucy', 'Phillips', '56 Fennock Avenue', 'IG74SR', '07826398810',
'lucyphillips@homteq-support.co.uk', 'Phillips1987#');

INSERT INTO Users 
(userType, userFName, userSName, userAddress, userPostCode, userTelNo
, userEmail, userPassword) VALUES 
('C', 'Christopher', 'Jenkins', '8 Yew Way', 'RE87384', '07438634197',
'christhebest@btinternet.com', '1979Bear');
